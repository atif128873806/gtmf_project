const one = (selector, root = document) => root.querySelector(selector);
const all = (selector, root = document) => [...root.querySelectorAll(selector)];

// Main navigation and its grouped mega menus.
const menuToggle = one('[data-menu-toggle]');
const primaryNav = one('[data-primary-nav]');
const navGroups = all('[data-nav-group]');
let navCloseTimer = null;
let suppressNextNavFocusOpen = false;

function closeNavGroups() {
    window.clearTimeout(navCloseTimer);
    navGroups.forEach((group) => {
        const trigger = one('[data-nav-trigger]', group);
        const panel = one('[data-nav-panel]', group);
        trigger?.setAttribute('aria-expanded', 'false');
        if (panel) panel.hidden = true;
        group.classList.remove('is-open');
    });
}

function openNavGroup(group) {
    window.clearTimeout(navCloseTimer);
    navGroups.forEach((other) => {
        const isCurrent = other === group;
        const trigger = one('[data-nav-trigger]', other);
        const panel = one('[data-nav-panel]', other);
        trigger?.setAttribute('aria-expanded', String(isCurrent));
        if (panel) panel.hidden = !isCurrent;
        other.classList.toggle('is-open', isCurrent);
    });
}

menuToggle?.addEventListener('click', () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!isOpen));
    menuToggle.querySelector('.sr-only').textContent = isOpen ? 'Open menu' : 'Close menu';
    primaryNav?.classList.toggle('is-open', !isOpen);
    if (isOpen) closeNavGroups();
});

navGroups.forEach((group) => {
    const trigger = one('[data-nav-trigger]', group);
    trigger?.addEventListener('click', (event) => {
        const isOpen = trigger.getAttribute('aria-expanded') === 'true';
        const desktopHover = innerWidth > 1000 && matchMedia('(hover: hover) and (pointer: fine)').matches;
        if (event.detail === 0 || desktopHover) {
            openNavGroup(group);
            return;
        }
        if (isOpen) {
            closeNavGroups();
        } else {
            openNavGroup(group);
        }
    });

    trigger?.addEventListener('focus', () => {
        if (suppressNextNavFocusOpen) {
            suppressNextNavFocusOpen = false;
            return;
        }
        if (trigger.matches(':focus-visible')) openNavGroup(group);
    });

    group.addEventListener('pointerenter', (event) => {
        if (event.pointerType !== 'touch' && matchMedia('(hover: hover) and (pointer: fine)').matches && innerWidth > 1000) {
            openNavGroup(group);
        }
    });

    group.addEventListener('pointerleave', (event) => {
        if (event.pointerType === 'touch' || innerWidth <= 1000) return;
        const hoveredElement = document.elementFromPoint(event.clientX, event.clientY);
        if (hoveredElement && group.contains(hoveredElement)) return;
        navCloseTimer = window.setTimeout(() => closeNavGroups(), 120);
    });

    group.addEventListener('focusout', (event) => {
        if (!group.contains(event.relatedTarget)) closeNavGroups();
    });
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('[data-nav-group]')) {
        closeNavGroups();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && navGroups.some((group) => group.classList.contains('is-open'))) {
        const activeGroup = navGroups.find((group) => group.classList.contains('is-open'));
        const trigger = one('[data-nav-trigger]', activeGroup);
        const shouldRestoreFocus = trigger && document.activeElement !== trigger;
        closeNavGroups();
        if (shouldRestoreFocus) {
            suppressNextNavFocusOpen = true;
            trigger.focus();
        }
    }
});

// Shared tab behavior for the role, workflow and GTM play examples.
function activateTabs(buttons, onActivate) {
    buttons.forEach((button, index) => {
        button.addEventListener('click', () => onActivate(button));
        button.addEventListener('keydown', (event) => {
            if (!['ArrowLeft', 'ArrowRight', 'Home', 'End'].includes(event.key)) return;
            event.preventDefault();
            const nextIndex = event.key === 'Home' ? 0
                : event.key === 'End' ? buttons.length - 1
                    : (index + (event.key === 'ArrowRight' ? 1 : -1) + buttons.length) % buttons.length;
            buttons[nextIndex].focus();
            buttons[nextIndex].click();
        });
    });
}

function selectedRolePains() {
    const panel = one('[data-role-panel]:not([hidden])');
    return panel ? all('input[name="pains[]"]:checked', panel) : [];
}

function updatePainSummary() {
    const count = one('[data-pain-count]');
    if (count) count.textContent = String(selectedRolePains().length);
}

const roleTabs = all('[data-role-tab]');
activateTabs(roleTabs, (button) => {
    roleTabs.forEach((tab) => tab.setAttribute('aria-selected', String(tab === button)));
    all('[data-role-panel]').forEach((panel) => {
        panel.hidden = panel.dataset.rolePanel !== button.dataset.roleTab;
    });
    updatePainSummary();
});

const workflowTabs = all('[data-workflow-tab]');
activateTabs(workflowTabs, (button) => {
    workflowTabs.forEach((tab) => tab.setAttribute('aria-selected', String(tab === button)));
    all('[data-workflow-panel]').forEach((panel) => {
        panel.hidden = panel.dataset.workflowPanel !== button.dataset.workflowTab;
    });
});

const playTabs = all('[data-play-tab]');
activateTabs(playTabs, (button) => {
    playTabs.forEach((tab) => tab.setAttribute('aria-selected', String(tab === button)));
    all('[data-play-panel]').forEach((panel) => {
        panel.hidden = panel.dataset.playPanel !== button.dataset.playTab;
    });
});

// Count the active role's issues and carry those selections into the review brief.
const painTool = one('[data-pain-tool]');
if (painTool) {
    const checkboxes = all('input[name="pains[]"]', painTool);
    const reviewLink = one('.button--gold', painTool);
    checkboxes.forEach((checkbox) => checkbox.addEventListener('change', updatePainSummary));
    updatePainSummary();

    reviewLink?.addEventListener('click', () => {
        const selected = selectedRolePains();
        if (!selected.length || !briefField) return;
        briefField.value = selected.map((checkbox) => checkbox.parentElement.innerText.trim()).join('; ');
        briefField.dispatchEvent(new Event('input', { bubbles: true }));
        briefField.focus({ preventScroll: true });
    });
}

// Store only the visitor's local display preference. No analytics script is
// configured in this project, so choosing a preference does not enable tracking.
const cookieNotice = one('[data-cookie-notice]');
const cookieKey = 'gtmf1-cookie-choice';
const showCookieNotice = () => {
    if (cookieNotice) cookieNotice.hidden = false;
};
if (cookieNotice && !localStorage.getItem(cookieKey)) showCookieNotice();
all('[data-cookie-choice]').forEach((button) => {
    button.addEventListener('click', () => {
        if (button.dataset.cookieChoice === 'dismissed') {
            localStorage.setItem(cookieKey, 'dismissed');
        }
        if (cookieNotice) cookieNotice.hidden = true;
    });
});
one('[data-cookie-settings]')?.addEventListener('click', showCookieNotice);

// The component-sheet prompt examples are buttons: selecting one fills the
// same brief field and returns focus to it for immediate editing.
const briefField = one('[data-brief-field]');
all('[data-brief-suggestion]').forEach((button) => {
    button.addEventListener('click', () => {
        if (!briefField) return;
        briefField.value = button.dataset.briefSuggestion;
        briefField.dispatchEvent(new Event('input', { bubbles: true }));
        briefField.focus();
        briefField.setSelectionRange(briefField.value.length, briefField.value.length);
    });
});

// Close the mobile navigation after a local anchor jump.
all('#primary-navigation a[href^="#"]').forEach((link) => {
    link.addEventListener('click', () => {
        closeNavGroups();
        menuToggle?.setAttribute('aria-expanded', 'false');
        menuToggle?.querySelector('.sr-only') && (menuToggle.querySelector('.sr-only').textContent = 'Open menu');
        primaryNav?.classList.remove('is-open');
    });
});

// Reveal the existing code once, retaining a complete accessible copy and its height.
all('[data-code-typing]').forEach((window) => {
    const source = one('pre > code', window);
    const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)');
    if (!source || reducedMotion.matches || !('IntersectionObserver' in globalThis)) return;

    const visual = document.createElement('code');
    visual.setAttribute('aria-hidden', 'true');
    // The trusted template's comment spans each sit on a single line.
    const lines = source.innerHTML.split('\n').map((html) => {
        const line = document.createElement('span');
        line.className = 'code-type-line';
        const text = document.createElement('span');
        text.className = 'code-type-text';
        text.innerHTML = html;
        line.append(text);
        visual.append(line);
        return { element: line, length: text.textContent.length };
    });

    source.classList.add('sr-only');
    source.after(visual);

    let lineIndex = 0;
    let characters = 0;
    let pause = 0;
    let lastTime = 0;
    let frame = null;
    let inView = false;
    let finished = false;

    function stop() {
        if (frame !== null) cancelAnimationFrame(frame);
        frame = null;
        lastTime = 0;
    }

    function complete() {
        if (finished) return;
        finished = true;
        stop();
        visual.remove();
        source.classList.remove('sr-only');
        observer.disconnect();
        document.removeEventListener('visibilitychange', resume);
        reducedMotion.removeEventListener('change', motionChanged);
    }

    function tick(time) {
        frame = null;
        if (!inView || document.hidden || finished) return;
        const elapsed = lastTime ? Math.min(time - lastTime, 64) : 0;
        lastTime = time;
        const line = lines[lineIndex];
        line.element.classList.add('is-active');

        if (pause > 0) {
            pause -= elapsed;
        } else {
            characters = Math.min(line.length, characters + elapsed * 0.1);
            line.element.style.setProperty('--typed-chars', String(Math.floor(characters)));
            if (characters >= line.length) {
                line.element.classList.remove('is-active');
                lineIndex += 1;
                characters = 0;
                pause = 90;
                if (lineIndex === lines.length) {
                    complete();
                    return;
                }
            }
        }

        frame = requestAnimationFrame(tick);
    }

    function resume() {
        if (inView && !document.hidden && !finished) {
            if (frame === null) frame = requestAnimationFrame(tick);
        } else {
            stop();
        }
    }

    function motionChanged() {
        if (reducedMotion.matches) complete();
    }

    const observer = new IntersectionObserver(([entry]) => {
        inView = entry.isIntersecting;
        resume();
    }, { threshold: 0, rootMargin: '0px 0px -10% 0px' });
    observer.observe(window);
    document.addEventListener('visibilitychange', resume);
    reducedMotion.addEventListener('change', motionChanged);
});

// Play the Figma data-record timeline on entry, then finish populating its six fields.
all('[data-motion-sequence="revenue-record"]').forEach((art) => {
    const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)');
    if (reducedMotion.matches || !('IntersectionObserver' in globalThis)) return;

    const observer = new IntersectionObserver(([entry]) => {
        const state = art.dataset.motionState;
        if (entry.isIntersecting && (state === 'waiting' || state === 'paused')) {
            art.dataset.motionState = 'playing';
        } else if (!entry.isIntersecting && state === 'playing') {
            art.dataset.motionState = 'paused';
        }
    }, { threshold: 0.2 });

    const finalCounter = one('[data-node-id="7:1728"]', art);
    function completeSequence(event) {
        if (event.target !== finalCounter || art.dataset.motionState !== 'playing') return;
        art.dataset.motionState = 'complete';
        observer.disconnect();
        art.removeEventListener('animationend', completeSequence);
        document.removeEventListener('visibilitychange', visibilityChanged);
        reducedMotion.removeEventListener('change', motionPreferenceChanged);
    }

    function visibilityChanged() {
        if (document.hidden && art.dataset.motionState === 'playing') {
            art.dataset.motionState = 'paused';
        } else if (!document.hidden && art.dataset.motionState === 'paused' &&
            art.getBoundingClientRect().top < innerHeight &&
            art.getBoundingClientRect().bottom > 0) {
            art.dataset.motionState = 'playing';
        }
    }

    function motionPreferenceChanged() {
        if (reducedMotion.matches) {
            art.dataset.motionState = 'complete';
            observer.disconnect();
            art.removeEventListener('animationend', completeSequence);
            document.removeEventListener('visibilitychange', visibilityChanged);
            reducedMotion.removeEventListener('change', motionPreferenceChanged);
        }
    }

    art.dataset.motionState = 'waiting';
    art.addEventListener('animationend', completeSequence);
    document.addEventListener('visibilitychange', visibilityChanged);
    reducedMotion.addEventListener('change', motionPreferenceChanged);
    observer.observe(art);
});

// Tell the existing radar-and-feed illustration as a complete signal-to-routing story.
all('[data-motion-sequence="signals-feed"]').forEach((art) => {
    const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)');
    if (reducedMotion.matches || !('IntersectionObserver' in globalThis)) return;

    const finalSignal = one('[data-node-id="7:2203"]', art);
    const observer = new IntersectionObserver(([entry]) => {
        const state = art.dataset.motionState;
        if (entry.isIntersecting && !document.hidden && (state === 'waiting' || state === 'paused')) {
            art.dataset.motionState = 'playing';
        } else if ((!entry.isIntersecting || document.hidden) && state === 'playing') {
            art.dataset.motionState = 'paused';
        }
    }, { threshold: 0.2 });

    function completeSequence(event) {
        if (event.target !== finalSignal || art.dataset.motionState !== 'playing') return;
        art.dataset.motionState = 'complete';
        observer.disconnect();
        art.removeEventListener('animationend', completeSequence);
        document.removeEventListener('visibilitychange', visibilityChanged);
        reducedMotion.removeEventListener('change', motionPreferenceChanged);
    }

    function visibilityChanged() {
        const bounds = art.getBoundingClientRect();
        const visible = bounds.top < innerHeight && bounds.bottom > 0;
        if (document.hidden && art.dataset.motionState === 'playing') {
            art.dataset.motionState = 'paused';
        } else if (!document.hidden && visible && art.dataset.motionState === 'paused') {
            art.dataset.motionState = 'playing';
        }
    }

    function motionPreferenceChanged() {
        if (reducedMotion.matches) {
            art.dataset.motionState = 'complete';
            observer.disconnect();
            art.removeEventListener('animationend', completeSequence);
            document.removeEventListener('visibilitychange', visibilityChanged);
            reducedMotion.removeEventListener('change', motionPreferenceChanged);
        }
    }

    art.dataset.motionState = 'waiting';
    art.addEventListener('animationend', completeSequence);
    document.addEventListener('visibilitychange', visibilityChanged);
    reducedMotion.addEventListener('change', motionPreferenceChanged);
    observer.observe(art);
});

// Run the Figma inbound workflow once as a clear lead-to-success story.
all('[data-motion-sequence="workflow-run"]').forEach((art) => {
    const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)');
    if (reducedMotion.matches || !('IntersectionObserver' in globalThis)) return;

    const successState = one('[data-node-id="7:2769"]', art);
    const observer = new IntersectionObserver(([entry]) => {
        const state = art.dataset.motionState;
        if (entry.isIntersecting && !document.hidden && (state === 'waiting' || state === 'paused')) {
            art.dataset.motionState = 'playing';
        } else if ((!entry.isIntersecting || document.hidden) && state === 'playing') {
            art.dataset.motionState = 'paused';
        }
    }, { threshold: 0.2 });

    function completeSequence(event) {
        if (event.target !== successState || art.dataset.motionState !== 'playing') return;
        art.dataset.motionState = 'complete';
        observer.disconnect();
        art.removeEventListener('animationend', completeSequence);
        document.removeEventListener('visibilitychange', visibilityChanged);
        reducedMotion.removeEventListener('change', motionPreferenceChanged);
    }

    function visibilityChanged() {
        const bounds = art.getBoundingClientRect();
        const visible = bounds.top < innerHeight && bounds.bottom > 0;
        if (document.hidden && art.dataset.motionState === 'playing') {
            art.dataset.motionState = 'paused';
        } else if (!document.hidden && visible && art.dataset.motionState === 'paused') {
            art.dataset.motionState = 'playing';
        }
    }

    function motionPreferenceChanged() {
        if (reducedMotion.matches) {
            art.dataset.motionState = 'complete';
            observer.disconnect();
            art.removeEventListener('animationend', completeSequence);
            document.removeEventListener('visibilitychange', visibilityChanged);
            reducedMotion.removeEventListener('change', motionPreferenceChanged);
        }
    }

    art.dataset.motionState = 'waiting';
    art.addEventListener('animationend', completeSequence);
    document.addEventListener('visibilitychange', visibilityChanged);
    reducedMotion.addEventListener('change', motionPreferenceChanged);
    observer.observe(art);
});

// Play the Figma outbound-sequence story: reply after touch two, stop, then book.
all('[data-motion-sequence="outbound-story"]').forEach((art) => {
    const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)');
    if (reducedMotion.matches || !('IntersectionObserver' in globalThis)) {
        art.dataset.motionState = 'complete';
        return;
    }

    const finalBar = one('[data-node-id="7:2996"]', art);
    let observer;

    function cleanup() {
        observer.disconnect();
        art.removeEventListener('animationend', completeSequence);
        document.removeEventListener('visibilitychange', visibilityChanged);
        reducedMotion.removeEventListener('change', motionPreferenceChanged);
    }

    function completeSequence(event) {
        if (event.target !== finalBar || art.dataset.motionState !== 'playing') return;
        art.dataset.motionState = 'complete';
        cleanup();
    }

    function visibilityChanged() {
        const bounds = art.getBoundingClientRect();
        const visible = bounds.top < innerHeight && bounds.bottom > 0;
        if (document.hidden && art.dataset.motionState === 'playing') {
            art.dataset.motionState = 'paused';
        } else if (!document.hidden && visible && art.dataset.motionState === 'paused') {
            art.dataset.motionState = 'playing';
        }
    }

    function motionPreferenceChanged() {
        if (reducedMotion.matches) {
            art.dataset.motionState = 'complete';
            cleanup();
        }
    }

    observer = new IntersectionObserver(([entry]) => {
        const state = art.dataset.motionState;
        if (entry.isIntersecting && !document.hidden && (state === 'waiting' || state === 'paused')) {
            art.dataset.motionState = 'playing';
        } else if ((!entry.isIntersecting || document.hidden) && state === 'playing') {
            art.dataset.motionState = 'paused';
        }
    }, { threshold: 0.2 });

    art.addEventListener('animationend', completeSequence);
    document.addEventListener('visibilitychange', visibilityChanged);
    reducedMotion.addEventListener('change', motionPreferenceChanged);
    observer.observe(art);
});

// Draw the connected GTM inputs into the final review CTA when it enters view.
all('[data-motion-sequence="cta-flow"]').forEach((art) => {
    const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)');
    if (reducedMotion.matches || !('IntersectionObserver' in globalThis)) {
        art.dataset.motionState = 'complete';
        return;
    }

    const output = one('.cta-flow__output', art);
    let observer;

    function cleanup() {
        observer.disconnect();
        art.removeEventListener('animationend', completeSequence);
        document.removeEventListener('visibilitychange', visibilityChanged);
        reducedMotion.removeEventListener('change', motionPreferenceChanged);
    }

    function completeSequence(event) {
        if (event.target !== output || art.dataset.motionState !== 'playing') return;
        art.dataset.motionState = 'complete';
        cleanup();
    }

    function visibilityChanged() {
        const bounds = art.getBoundingClientRect();
        const visible = bounds.top < innerHeight && bounds.bottom > 0;
        if (document.hidden && art.dataset.motionState === 'playing') {
            art.dataset.motionState = 'paused';
        } else if (!document.hidden && visible && art.dataset.motionState === 'paused') {
            art.dataset.motionState = 'playing';
        }
    }

    function motionPreferenceChanged() {
        if (reducedMotion.matches) {
            art.dataset.motionState = 'complete';
            cleanup();
        }
    }

    observer = new IntersectionObserver(([entry]) => {
        const state = art.dataset.motionState;
        if (entry.isIntersecting && !document.hidden && (state === 'waiting' || state === 'paused')) {
            art.dataset.motionState = 'playing';
        } else if ((!entry.isIntersecting || document.hidden) && state === 'playing') {
            art.dataset.motionState = 'paused';
        }
    }, { threshold: 0.2 });

    art.dataset.motionState = 'waiting';
    art.addEventListener('animationend', completeSequence);
    document.addEventListener('visibilitychange', visibilityChanged);
    reducedMotion.addEventListener('change', motionPreferenceChanged);
    observer.observe(art);
});

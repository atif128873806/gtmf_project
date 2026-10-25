const one = (selector, root = document) => root.querySelector(selector);
const all = (selector, root = document) => [...root.querySelectorAll(selector)];

// Mobile navigation and its two small disclosure menus.
const menuToggle = one('[data-menu-toggle]');
const primaryNav = one('[data-primary-nav]');

menuToggle?.addEventListener('click', () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!isOpen));
    menuToggle.querySelector('.sr-only').textContent = isOpen ? 'Open menu' : 'Close menu';
    primaryNav?.classList.toggle('is-open', !isOpen);
});

all('[data-nav-group]').forEach((group) => {
    const trigger = one('[data-nav-trigger]', group);
    const panel = one('[data-nav-panel]', group);

    trigger?.addEventListener('click', () => {
        const expanded = trigger.getAttribute('aria-expanded') === 'true';
        all('[data-nav-group]').forEach((other) => {
            one('[data-nav-trigger]', other)?.setAttribute('aria-expanded', 'false');
            const otherPanel = one('[data-nav-panel]', other);
            if (otherPanel) otherPanel.hidden = true;
        });
        trigger.setAttribute('aria-expanded', String(!expanded));
        if (panel) panel.hidden = expanded;
    });
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('[data-nav-group]')) {
        all('[data-nav-group]').forEach((group) => {
            one('[data-nav-trigger]', group)?.setAttribute('aria-expanded', 'false');
            const panel = one('[data-nav-panel]', group);
            if (panel) panel.hidden = true;
        });
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
        menuToggle?.setAttribute('aria-expanded', 'false');
        menuToggle?.querySelector('.sr-only') && (menuToggle.querySelector('.sr-only').textContent = 'Open menu');
        primaryNav?.classList.remove('is-open');
    });
});

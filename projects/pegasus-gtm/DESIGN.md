# Design Direction

The design is a long-form B2B marketing page for revenue leaders. The Figma palette uses the selected dark forest green `#21483A` in place of Crown of Thorns `#7A1E3A`; Straw `#D8B98A`, dark Woodsmoke `#0A0A0C`, warm cream panels, and white content areas remain unchanged. The new GTMF1 HTML source uses dark `#0B0B0A` with gold `#D8AA2D`; that alternate palette was not selected. Keep Inter for interface and body copy and JetBrains Mono for code-like detail. Use a 1200 px desktop content width, generous vertical spacing, restrained borders and shadows, and the alternating cream/white/dark sections shown in Figma.

On smaller screens, collapse side-by-side content to one column, make tabs scroll or wrap, replace desktop navigation with a keyboard-accessible menu, and scale the hero typography. Respect reduced-motion preferences and preserve readable content order.

## Source observations

- One desktop frame named `1920w light` at node `7:3467`, under homepage section `7:5692`.
- 16 content sections, a header, announcement bar, cookie notice, footer, and separate local component sheet.
- The selected frame uses a 1200 px content wrapper; Figma variables include Inter, JetBrains Mono, `#7A1E3A` (replaced by the user-selected `#21483A`), `#D8B98A`, cream `#F7EFE4`/`#F2EDE4`, and near-black `#0A0A0C`.
- Only desktop is supplied. The responsive rules above are proposed adaptations accepted for implementation by the user.

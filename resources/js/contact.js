function focusContactResult() {
    const id = window.location.hash.replace('#', '');

    if (id !== 'brief-status' && id !== 'brief-errors') {
        return;
    }

    const node = document.getElementById(id);

    if (!node) {
        return;
    }

    const target = node.querySelector('a, button') || node;
    target.focus({ preventScroll: true });
}

export function initContact() {
    focusContactResult();
}

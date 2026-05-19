(function() {
    const select = document.querySelector('select[name="type_val"]');
    if (!select) return;

    function update() {
        const val = select.value;
        // Все элементы с атрибутом name, кроме самого select
        const elements = document.querySelectorAll('[name]');
        elements.forEach(el => {
            if (el === select) return;
            const name = el.getAttribute('name');
            if (name && name.includes(val)) {
                el.style.display = '';
                if (el.parentElement && el.parentElement.tagName === 'P') {
                    el.parentElement.style.display = '';
                }
                if (el.disabled) el.disabled = false;
            } else {
                el.style.display = 'none';
                if (el.parentElement && el.parentElement.tagName === 'P') {
                    el.parentElement.style.display = 'none';
                }
                el.disabled = true;
            }
        });
    }

    update();
    select.addEventListener('change', update);
})();

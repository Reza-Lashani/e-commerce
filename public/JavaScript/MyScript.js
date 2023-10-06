const categoryWrappers = document.querySelectorAll('.category-wrapper');

for (const categoryWrapper of categoryWrappers) {
    categoryWrapper.addEventListener('mousedown', function(event) {
        event.preventDefault();
        this.classList.add('grabbing');
    });

    categoryWrapper.addEventListener('mousemove', function(event) {
        if (this.classList.contains('grabbing')) {
            this.scrollLeft += event.movementX;
        }
    });

    categoryWrapper.addEventListener('mouseup', function() {
        this.classList.remove('grabbing');
    });
}
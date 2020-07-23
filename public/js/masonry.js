class Bricks {
    constructor(parent, item, columns){
        this.parent = parent;
        this.item = item;
        this.items = $(parent + ' ' + item);
        this.columns = columns;
        this.columnElements = [];

        this.itemCount = this.items.length + 1;

        this.createMasonryColumns();
        this.populateColumns();
    }
    createMasonryColumns(){
        var columnsToMake = Math.ceil(this.itemCount / this.columns) - 1;
        for(var i = 0; i < columnsToMake; i++){
            var columnElement = $(this.parent).append('<div class="masonry-column"></div>');
            this.columnElements.push(columnElement);
        }

    }
    populateColumns(){
        $(this.items).each(function(i){
            var column = (i / 3).toFixed(0) - 1;
            var columnElement = $('.masonry .masonry-column').get(column);
            $(this).appendTo(columnElement);
        });
    }
}

window.addEventListener('load', function () {
    var Masonry = new Bricks('.masonry', '.masonry-item', 3);
});
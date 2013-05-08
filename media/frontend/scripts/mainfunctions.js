(function($){
    $(window).load(function(){
        $('.gallery-anchor').each(function(){
            $(this).bind('click',function(e){
                e.preventDefault();
                new Gallery('#' + $(this).data('gallery'));
            })
        });
    });

    Gallery = function(el, options){
        if (!el.length) return;
        this.el = $(el);
        this.settings = $.extend(true, {
            startIndx:  0,
            width:      800,
            height:     600,
            duration:   400,
            frequency:  3000,
            autoSlide:  1,
            maxVisible: 5,
            thumbWidth: 144
        }, options || {});
        this.init();
    };

    Gallery.prototype = {
        init: function(){
            this.items = $('li',this.el);
            this.current=this.settings.startIndx;
            this.position = 0;
            this.busy = false;
            if(!this.items.length) return;
            this.buildPopUp().getThumbs().bindEvents().getSlide(this.current);
        },
        buildPopUp: function(){
            this.overlay = $('<div class="gallery-overlay" />').appendTo('body');
            this.container = $('<div class="gallery-container" />').appendTo(this.overlay);
            this.imageContainer = $('<div class="gallery-view" />').appendTo(this.container);
            this.thumbsContainer = $('<div class="gallery-thumbs" />').appendTo(this.container);
            this.thumbs = $('<div class="gallery-thumbs-items" />').appendTo(this.thumbsContainer);
            this.close = $('<a href="#" class="gallery-close">x</a>').appendTo(this.container);
            (this.items.length > this.settings.maxVisible) && this.buildNavigation();
            return this;
        },
        bindEvents: function(){
            this.close.bind('click', $.proxy(function(){
                this.overlay.remove();
            },this));
            return this;
        },
        getThumbs: function(){
            this.items.each($.proxy(function(indx, val){
                $('<a href="#"><img src="'+ $(val).text() +'" /></a>').appendTo(this.thumbs).bind('click', $.proxy(function(e){
                    e.preventDefault();
                    this.current=indx;
                    this.getSlide(indx);
                    this.previous=this.current;
                    $('img',this.thumbs).removeClass('active');
                    $(e.target).addClass('active');
                },this));
            },this));
            return this;
        },
        getSlide: function(indx){
            if(this.previous==this.current) return;
            this.imageContainer.fadeOut(this.duration, $.proxy(function(){
                this.imageContainer.fadeIn(this.duration).html('<img src="'+this.items.eq(indx).text()+'"/>');
            },this));
            return this;
        },
        buildNavigation: function(){
            $('<a href="#" class="gallery-navigation gallery-prev" data-dir="prev" />').appendTo(this.container);
            $('<a href="#" class="gallery-navigation gallery-next" data-dir="next" />').appendTo(this.container);

            $('.gallery-navigation',this.overlay).bind('click', $.proxy(function(e){
                e.preventDefault();
                this.moveThumbs($(e.target).data('dir'));
            },this));
            return this;
        },
        moveThumbs: function(dir){
            if(this.busy) return;
            (dir=='prev') ? this.position-- : this.position++;
            this.position = (this.position < 0) ? 0 : this.position;
            this.position = (this.position > this.items.length - this.settings.maxVisible) ? this.items.length - this.settings.maxVisible : this.position;
            this.busy = true;
            this.thumbs.animate({'left':-this.position * this.settings.thumbWidth},this.settings.duration, $.proxy(function(){
                this.busy=false;
            },this));
        }
    };

})(jQuery);

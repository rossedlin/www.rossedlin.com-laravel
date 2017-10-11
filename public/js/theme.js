/**
 * HSCore -
 *
 * @author HtmlStream
 * @version 1.0
 */
;
(function ($) {

  'use strict';

  $.HSCore = {

    /**
     *
     *
     * @param
     *
     * @return
     */
    init: function () {

      $(document).ready(function (e) {
        // Botostrap Tootltips
        $('[data-toggle="tooltip"]').tooltip();

        // Set Background Image Dynamically
        if ($('[data-bg-img-src]').length) $.HSCore.helpers.bgImage($('[data-bg-img-src]'));

        // Extends jQuery
        $.HSCore.helpers.extendjQuery();

        // Detect Internet Explorer (IE)
        $.HSCore.helpers.detectIE();

        // Bootstrap Navigation Options
        $.HSCore.helpers.bootstrapNavOptions.init();

      });

      $(window).on('load', function (e) {

      });

    },

    /**
     *
     *
     * @var
     */
    components: {},

    /**
     *
     *
     * @var
     */
    helpers: {

        Math: {

          getRandomValueFromRange: function(startPoint, endPoint, fixed) {

            var fixedInner = fixed ? fixed : false;

            Math.random();

            return fixedInner ? (Math.random() * (endPoint - startPoint) + startPoint) : (Math.floor(Math.random() * (endPoint - startPoint + 1)) + startPoint);

          }

      },

      /**
       * Sets background-image dynamically.
       *
       * @param jQuery collection
       *
       * @return jQuery|undefined
       */
      bgImage: function (collection) {

        if (!collection || !collection.length) return;

        return collection.each(function (i, el) {

          var $el = $(el),
            bgImageSrc = $el.data('bg-img-src');

          if (bgImageSrc) $el.css('background-image', 'url(' + bgImageSrc + ')');

        });

      },

      /**
       * Extends basic jQuery functionality
       *
       * @return undefined
       */
      extendjQuery: function () {

        $.fn.extend({

          /**
           * Runs specified function after loading of all images.
           *
           * @return Deferred
           */
          imagesLoaded: function () {

            var $imgs = this.find('img[src!=""]');

            if (!$imgs.length) {
              return $.Deferred().resolve().promise();
            }

            var dfds = [];

            $imgs.each(function () {
              var dfd = $.Deferred();
              dfds.push(dfd);
              var img = new Image();
              img.onload = function () {
                dfd.resolve();
              };
              img.onerror = function () {
                dfd.resolve();
              };
              img.src = this.src;
            });

            return $.when.apply($, dfds);

          }

        });

      },


      /**
       * Detect Internet Explorer (IE)
       *
       * @return version of IE or false, if browser is not Internet Explorer
       */

      detectIE: function() {

          var ua = window.navigator.userAgent;

          var trident = ua.indexOf('Trident/');
          if (trident > 0) {
              // IE 11 => return version number
              var rv = ua.indexOf('rv:');
              var ieV = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
              document.querySelector('body').className += ' IE';
          }

          var edge = ua.indexOf('Edge/');
          if (edge > 0) {
             // IE 12 (aka Edge) => return version number
             var ieV = parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
              document.querySelector('body').className += ' IE';
          }

          // other browser
          return false;

      },


      /**
       * Bootstrap navigation options
       *
       */
      bootstrapNavOptions: {
        init: function () {
          this.mobileHideOnScroll();
        },

        mobileHideOnScroll: function () {
          var $collection = $('.navbar');
          if (!$collection.length) return;

          var $w = $(window),
            breakpointsMap = {
              'sm': 576,
              'md': 768,
              'lg': 992,
              'xl': 1200
            };

          $('body').on('click.HSMobileHideOnScroll', '.navbar-toggler', function (e) {
            var $navbar = $(this).closest('.navbar');

            if ($navbar.length) {
              $navbar.data('mobile-menu-scroll-position', $w.scrollTop());
            }
            e.preventDefault();
          });

          $w.on('scroll.HSMobileHideOnScroll', function (e) {
            $collection.each(function (i, el) {
              var $this = $(el), $toggler, $nav, offset, $hamburgers, breakpoint;
              if ($this.hasClass('navbar-toggleable-xl')) breakpoint = breakpointsMap['xl'];
              else if ($this.hasClass('navbar-toggleable-lg')) breakpoint = breakpointsMap['lg'];
              else if ($this.hasClass('navbar-toggleable-md')) breakpoint = breakpointsMap['md'];
              else if ($this.hasClass('navbar-toggleable-xs')) breakpoint = breakpointsMap['xs'];

              if ($w.width() > breakpoint) return;

              $toggler = $this.find('.navbar-toggler');
              $nav = $this.find('.navbar-collapse');

              if (!$nav.data('mobile-scroll-hide')) return;

              if ($nav.length) {
                offset = $this.data('mobile-menu-scroll-position');

                if (Math.abs($w.scrollTop() - offset) > 40 && $nav.hasClass('show')) {
                  $toggler.trigger('click');
                  $hamburgers = $toggler.find('.is-active');
                  if ($hamburgers.length) {
                    $hamburgers.removeClass('is-active');
                  }
                }
              }
            });
          });
        }
      }

    },

    /**
     *
     *
     * @var
     */
    settings: {
      rtl: false
    }

  };

  $.HSCore.init();

})(jQuery);
/**
 * Hamburgers plugin helper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires hamburgers.min.css
 *
 */
;(function($){
	'use strict';

	$.HSCore.helpers.HSHamburgers = {

		/**
		 * Initialize 'hamburgers' plugin.
		 * 
		 * @param String selector
		 *
		 * @return undefined;
		 */
		init: function(selector) {

			if( !selector || !$(selector).length ) return;

		  var hamburgers = $(selector),
		  		timeoutid;

		  hamburgers.each(function(i, el){

		  	var $this = $(this);

		  	if($this.closest('button').length) {
		  		$this.closest('button').get(0).addEventListener('click', function(e){

		  			var $self = $(this),
		  					$hamburger = $self.find(selector);

		  			if(timeoutid) clearTimeout(timeoutid);
		  			timeoutid = setTimeout(function(){

		  				$hamburger.toggleClass('is-active');

		  			}, 10);
		  			e.preventDefault();
		  		}, false);
		  	}
		  	else {
		  		$this.get(0).addEventListener('click', function(e){

		  			var $self = $(this);

		  			if(timeoutid) clearTimeout(timeoutid);
		  			timeoutid = setTimeout(function(){

		  				$self.toggleClass('is-active');

		  			}, 10);
		  			e.preventDefault();
		  		}, false);
		  	}

		  });

		}
		

	};

})(jQuery);
/**
 * Bootstrap Dorpdown Wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function($){
	'use strict';

	/**
	 * Helper function for detect support of touch events.
	 *
	 * @return Boolean
	 */
	function touchEvents(){
		if('ontouchstart' in window) {
			return true;
		}
		return false;
	}

	/**
	 * Helper function for moving viewport to specified element.
	 *
	 * @param jQuery element
	 *
	 * @return undefined
	 */
	function focusElement(element){
		if(!element || !element.length) return;

		var header = element.closest('.u-header').filter('[class*="u-header--side"]'),
				container = header.find('.u-header__sections-container'),
				offset = element.offset().top + container.scrollTop(),
				breakpoint = $(window).height() / 2;

		if(header.length && offset > breakpoint) {

			container.stop().animate({
				scrollTop: offset - breakpoint
			});

		}

	}

	/**
	 * Adds class if element doesn't fit into the screen.
	 *
	 * @param jQuery element
	 *
	 * @return undefined
	 */
	function smartPosition(element) {
		if(!element || !element.length) return;

		element.removeClass('u-dropdown--reverse-position').show();

		var breakpoint = $(window).width(),
				offset = element.offset().left + element.outerWidth();

		element.hide();

		if(offset > breakpoint) {
			element.addClass('u-dropdown--reverse-position');
		}

		// need RTL implementation
	}

	$.HSCore.components.HSDropdown = {


		/**
		 * Base configuration of the wrapper.
		 *
		 * @var Object _baseConfig
		 */
		_baseConfig: {
			event: 'click', // 'click', 'hover'
			appear: 'show-hide' // 'show-hide', 'slide', 'fade', 'slideRight'
		},

		/**
		 * Initialization of HSDropdown wrapper.
		 *
		 * @param String collection (optional)
		 *
		 * @return jQuery - collection of initialized items.
		 */
		init: function(collection) {
			if(!collection && !collection.length) return;

			var self = this;

			return collection.each(function(i, el){

				var $this = $(el),
						config = $.extend(true, {}, self._baseConfig, $this.data());

				if($this.data('HSDropdown')) return;

				$this.data(
					'HSDropdown',
					self._makeDropdownObject($this, config)
				);

			});
		},

		/**
		 * Returns Dropdown Object
		 *
		 * @param jQuery element
		 * @param Object config
		 *
		 * @return OnHoverDropdown|OnClickDropdown
		 */
		_makeDropdownObject: function(element, config) {

			switch(config['event']) {

				case 'hover' :
					return new OnHoverDropdown(
						element,
						config,
						this._makeDropdownEffect(element, config)
					);
				break;

				default:
					return new OnClickDropdown(
						element,
						config,
						this._makeDropdownEffect(element, config)
					);

			}

		},

		/**
		 * Returns dropdown effect object.
		 *
		 * @param jQuery element
		 * @param Object config
		 *
		 * @return SlideDownDropdownEffect|ShowHideDropdownEffect|FadeToggleDropdownEffect
		 */
		_makeDropdownEffect: function(element, config) {

			switch(config['appear']) {

				case 'slide':
					return new SlideDownDropdownEffect(element);
				break;

				case 'slideRight':
					return new SlideRightDropdownEffect(element);
				break;

				case 'fade':
					return new FadeToggleDropdownEffect(element);
				break;


				default:
					return new ShowHideDropdownEffect(element);

			}

		}

	};


	/**
	 * Constructor function for dropdown elements which will be appear by hover event.
	 *
	 * @param jQuery element
	 * @param Object config
	 * @param Object effect
	 */
	function OnHoverDropdown(element, config, effect) {
		this.element = element;
		this.config = config;
		this.effect = effect;

		if(touchEvents()) {
			this.initTabletBehavior();
		}
		else {
			this.init();
		}
	}

	/**
	 * Initialization of OnHoverDropdown object.
	 *
	 * @return OnHoverDropdown
	 */
	OnHoverDropdown.prototype.init = function() {
		var self = this;

		this.element
			.on('mouseenter.HSDropdown', function(e){
				if(self.mouseLeaveTimeOutId) clearTimeout(self.mouseLeaveTimeOutId);
				self.effect.show();
				e.preventDefault();
			})
			.on('mouseleave.HSDropdown', function(e){
				self.mouseLeaveTimeOutId = setTimeout(function(){
					self.effect.hide();
				}, 100);
				e.preventDefault();
			})
			.on('click.HSDropdown', function(e){
				e.stopPropagation();
			})
			.siblings('.dropdown-menu')
			.on('mouseenter.HSDropdown', function(e){
				if(self.mouseLeaveTimeOutId) clearTimeout(self.mouseLeaveTimeOutId);
				e.preventDefault();
			})
			.on('mouseleave.HSDropdown', function(e){
				self.mouseLeaveTimeOutId = setTimeout(function(){
					self.effect.hide();
				}, 100);
				e.preventDefault();
			});

		return this;
	}

	/**
	 * Initialization tablet behavior of OnHoverDropdown object.
	 *
	 * @return OnHoverDropdown
	 */
	OnHoverDropdown.prototype.initTabletBehavior = function(){

		var self = this;

		this.element.on('click.HSDropdown', function(e){
			if(!self.element.data('showed')) {
				self.element.data('showed', true);
				self.effect.show();
			}
			else {
				self.element.data('showed', false);
				self.effect.hide();
			}
			e.preventDefault();
			e.stopPropagation();
		});

		$(document).on('click.HSDropdown', function(e){
			if(!$(e.target).closest(self.element.parent()).length) {
				self.element.data('showed', false);
				self.effect.hide();
			}
		});

		return this;
	}

	/**
	 * Destroy OnHoverDropdown object.
	 *
	 * @return OnHoverDropdown
	 */
	OnHoverDropdown.prototype.destroy = function() {
		var self = this;

		this.element
			.off('.HSDropdown')
			.siblings('.dropdown-menu')
			.off('.HSDropdown');

		$(document).off('.HSDropdown');

		return this;
	}

	/**
	 * Constructor function for dropdown elements which will be appear by click event.
	 *
	 * @param jQuery element
	 * @param Object config
	 * @param Object effect
	 */
	function OnClickDropdown(element, config, effect) {

		this.element = element;
		this.config = config;
		this.effect = effect;

		this.init();

	}

	/**
	 *
	 *
	 * @param
	 *
	 * @return OnClickDropdown
	 */
	OnClickDropdown.prototype.init = function() {
		var self = this;

		this.element.on('click.HSDropdown', function(e){

			var opened = $('[data-toggle="dropdown"]').not(self.element)

			if(opened.length) {
				opened.data('HSDropdown').effect.hide();
				opened.data('HSDropdown').element.data('showed', false);
			}


			if(!self.element.data('showed')) {
				self.element.data('showed', true);
				self.effect.show();
			}
			else {
				self.element.data('showed', false);
				self.effect.hide();
			}
			e.preventDefault();
			e.stopPropagation();
		});

		$(document).on('click.HSDropdown', function(e){
			if(!$(e.target).closest(self.element.parent()).length) {
				self.element.data('showed', false);
				self.effect.hide();
			}
		});

		return this;
	}

	/**
	 *
	 *
	 * @param
	 *
	 * @return OnClickDropdown
	 */
	OnClickDropdown.prototype.destroy = function() {

		this.element
			.off('.HSDropdown');

		$(document).off('.HSDropdown');

		return this;
	}

	/**
	 * Constructor function for making dropdown effect object.
	 *
	 * @param jQuery element
	 */
	function ShowHideDropdownEffect(element) {
		this.element = element;
		this.dropdown = this.element.siblings('.dropdown-menu');
	}

	/**
	 * Shows dropdown element.
	 *
	 * @return ShowHideDropdownEffect
	 */
	ShowHideDropdownEffect.prototype.show = function() {
		var inlineNavbar = this.element.closest('[class*="u-navbar--inline-submenu"]');

		if(!this.dropdown.length) return this;

		this.element.parent().addClass('show');

		if(inlineNavbar.length) {
			inlineNavbar.removeClass('u-navbar--overflow');

			var ddOffset = this.dropdown.offset().left;

			if(ddOffset < 0) inlineNavbar.addClass('u-navbar--overflow');
		}

		focusElement(this.element);

		return this;
	}

	/**
	 * Hides dropdown element.
	 *
	 * @return ShowHideDropdownEffect
	 */
	ShowHideDropdownEffect.prototype.hide = function() {
		this.element.parent().removeClass('show');

		return this;
	}

	/**
	 * Constructor function for making dropdown effect object.
	 *
	 * @param jQuery element
	 */
	function FadeToggleDropdownEffect(element) {
		this.element = element;

		this.dropdown = this.element.siblings('.dropdown-menu');
	}

	/**
	 * Shows dropdown element.
	 *
	 * @return FadeToggleDropdownEffect
	 */
	FadeToggleDropdownEffect.prototype.show = function() {
		var self = this,
				inlineNavbar = this.element.closest('[class*="u-navbar--inline-submenu"]');

		if(!this.dropdown.length) return this;

		if(inlineNavbar.length) {
			inlineNavbar.removeClass('u-navbar--overflow');

			this.dropdown.show();
			var ddOffset = this.dropdown.offset().left;
			this.dropdown.hide();

			if(ddOffset < 0) inlineNavbar.addClass('u-navbar--overflow');
		}

		this.dropdown.stop().fadeIn({
			easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
			duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350,
			complete: function() {
				focusElement(self.element);
			}
		});

		return this;
	}

	/**
	 * Hides dropdown element.
	 *
	 * @return FadeToggleDropdownEffect
	 */
	FadeToggleDropdownEffect.prototype.hide = function() {
		var self = this;

		this.dropdown.stop().fadeOut({
			easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
			duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350
		});

		return this;
	}

	/**
	 * Constructor function for making dropdown effect object.
	 *
	 * @param jQuery element
	 */
	function SlideDownDropdownEffect(element) {
		this.element = element;
		this.dropdown = this.element.siblings('.dropdown-menu');
	}

	/**
	 * Shows dropdown element.
	 *
	 * @return SlideDownDropdownEffect
	 */
	SlideDownDropdownEffect.prototype.show = function() {
		var self = this,
				inlineNavbar = this.element.closest('[class*="u-navbar--inline-submenu"]');

		if(!this.dropdown.length) return this;

		if(inlineNavbar.length) {
			inlineNavbar.removeClass('u-navbar--overflow');

			this.dropdown.show();
			var ddOffset = this.dropdown.offset().left;
			this.dropdown.hide();

			if(ddOffset < 0) inlineNavbar.addClass('u-navbar--overflow');
		}

		smartPosition(this.dropdown);

		this.dropdown.stop().slideDown({
			easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
			duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350,
			complete: function() {
				focusElement(self.element);
			}
		});

		return this;
	}

	/**
	 * Hides dropdown element.
	 *
	 * @return SlideDownDropdownEffect
	 */
	SlideDownDropdownEffect.prototype.hide = function() {
		var self = this;

		this.dropdown.stop().slideUp({
			easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
			duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350
		});

		return this;
	}

	/**
	 * Constructor function for making dropdown effect object.
	 *
	 * @param jQuery element
	 */
	function SlideRightDropdownEffect(element) {
		this.element = element;
		this.dropdown = this.element.siblings('.dropdown-menu');
		this.w = $(window);

		this.toggleable = this.element.closest('[class*="navbar-toggleable-"]');

		if(this.toggleable.hasClass('navbar-toggleable-lg')) {
			this.breakpoint = 1200;
		}
		else if(this.toggleable.hasClass('navbar-toggleable-md')) {
			this.breakpoint = 992;
		}
		else if(this.toggleable.hasClass('navbar-toggleable-sm')) {
			this.breakpoint = 768;
		}
	}

	/**
	 * Shows dropdown element.
	 *
	 * @return SlideRightDropdownEffect
	 */
	SlideRightDropdownEffect.prototype.show = function() {
		var self = this;

		this.dropdown.css('width', 'auto')
				.data('initial-width', this.dropdown.outerWidth())
				.css({
					'width': 0,
					'min-width': 'initial'
				});

		if(this.breakpoint && this.w.width() > this.breakpoint) {
			this.dropdown.show().stop().animate({
				width: self.dropdown.data('initial-width')
			}, {
				easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
				duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350
			});
		}
		else{
			this.dropdown.css('width', 'auto').stop().slideDown({
				easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
				duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350
			});
		}

		return this;
	}

	/**
	 * Hides dropdown element.
	 *
	 * @return SlideRightDropdownEffect
	 */
	SlideRightDropdownEffect.prototype.hide = function() {
		var self = this;

		if(this.breakpoint && this.w.width() > this.breakpoint) {
			this.dropdown.stop().animate({
				width: 0
			}, {
				easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
				duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350,
				complete: function() {
					$(this).hide();
				}
			});
		}
		else{
			this.dropdown.stop().slideUp({
				easing: self.element.data('appear-easing') ? self.element.data('appear-easing') : 'linear',
				duration: isFinite(self.element.data('appear-speed')) ? self.element.data('appear-speed') : 350
			});
		}

		return this;
	}

})(jQuery);
/**
 * Ajax autocomplete wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSAjaxAutocomplete = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      animation: 'fade',
      animationSpeed: 400
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Ajax autocomplete wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initAjaxAutocomplete();

      return this.pageCollection;

    },

    initAjaxAutocomplete: function () {
      //Variables
      var $self = this,
          config = $self.config,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
            $target = $this.data('target'),
            animation = $this.data('animation'),
            animationSpeed = $this.data('animation-speed');

        $this.on('keyup', function () {
          if (animation == 'fade') {
            if ($this.val()) {
              $('#' + $target).fadeIn(animationSpeed);
            }

            else {
              $('#' + $target).fadeOut(animationSpeed);
            }
          } else {
            if ($this.val()) {
              $('#' + $target).slideDown(animationSpeed);
            }

            else {
              $('#' + $target).slideUp(animationSpeed);
            }
          }
        });

        $this.on('focusout', function () {
          if (animation == 'fade') {
            $('#' + $target).fadeOut(animationSpeed);
          } else {
            $('#' + $target).slideUp(animationSpeed);
          }
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);
/**
 * Autocomplete wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.widget('custom.localcatcomplete', $.ui.autocomplete, {
    _create: function () {
      this._super();
      this.widget().menu('option', 'items', '> :not(.ui-autocomplete-category)');
    },
    _renderItem: function (ul, item) {
      if (item.url) {
        return $('<li><a href="' + window.location.protocol + '//' + window.location.host + '/' + window.location.pathname.split('/')[1] + '/' + item.url + '">' + item.label + '<span class="g-opacity-0_3 g-ml-5">· ' + item.category + '</span></a></li>')
          .appendTo(ul);
      } else {
        return $('<li>' + item.label + '</li>')
          .appendTo(ul);
      }
    },
    /*_renderMenu: function (ul, items) {
      var that = this,
        currentCategory = '';

      $.each(items, function (index, item) {
        var li;

        if (item.category != currentCategory) {
          ul.append('<li class="ui-autocomplete-category">' + item.category + '2</li>');
          currentCategory = item.category;
        }

        li = that._renderItemData(ul, item);

        if (item.category) {
          li.attr('aria-label', item.category + ' : ' + item.label);
        }
      });
    }*/
  });

  $.HSCore.components.HSLocalSearchAutocomplete = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      minLength: 2
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Autocomplete wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initAutocomplete();

      return this.pageCollection;

    },

    initAutocomplete: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        var $this = $(el),
          dataUrl = $this.data('url');

        $.getJSON(dataUrl, function (data) {
          $this.localcatcomplete({
            delay: 0,
            source: data
          });
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);

/**
 * Autocomplete wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.widget('custom.catcomplete', $.ui.autocomplete, {
    _create: function () {
      this._super();
      this.widget().menu('option', 'items', '> :not(.ui-autocomplete-category)');
    },
    _renderMenu: function (ul, items) {
      var that = this,
        currentCategory = '';
      $.each(items, function (index, item) {
        var li;

        if (!item.category) {
          li = that._renderItemData(ul, item);
          return;
        }

        if (item.category != currentCategory) {
          ul.append('<li class="ui-autocomplete-category">' + item.category + '</li>');
          currentCategory = item.category;
        }
        li = that._renderItemData(ul, item);
        if (item.category) {
          li.html(item.label);
          li.attr('aria-label', item.category + ' : ' + item.label);
        }
      });
    }
  });

  $.HSCore.components.HSAutocomplete = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      minLength: 2
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Autocomplete wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initAutocomplete();

      return this.pageCollection;

    },

    initAutocomplete: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        var $this = $(el),
          dataUrl = $this.data('url');

        $.getJSON(dataUrl, function (data) {
          $this.catcomplete({
            delay: 0,
            source: data,
            dataType: 'json',
            minLength: config['minLength'],
            select: function (event, ui) {
              var currentItem = $(this);

              setTimeout(function () {
                var currentVal = currentItem.val();
                $(currentItem).val($(currentVal).get(0).textContent);
              }, 1);
            },
            focus: function (event, ui) {
              var currentItem = $(this);

              setTimeout(function () {
                var currentVal = currentItem.val();
                $(currentItem).val($(currentVal).get(0).textContent);
              });
            }
          });
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);
/**
 * Background video wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSBgVideo = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Video and audio wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initBgVideo();

      return this.pageCollection;

    },

    initBgVideo: function () {
      //Variables
      var $this = this,
          collection = $this.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $bgVideo = $(el);

        $bgVideo.hsBgVideo();

        //Add object to collection
        collection = collection.add($bgVideo);
      });
    }
  }

})(jQuery);

/**
 * Carousel Materialize wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSCarouselMaterialize = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      dist: -50
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Carousel wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initCarouselMaterialize();

      return this.pageCollection;

    },

    initCarouselMaterialize: function () {
      //Variables
      var $self = this,
          config = $self.config,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el);

        $this.materializeCarousel({
          dist: -50
        });

        //Actions
        collection = collection.add($this);
      });
    }
  }

})(jQuery);

/**
 * Carousel wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSCarouselOwl = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Owl Carousel wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initOwlCarousel();

      return this.pageCollection;

    },

    initOwlCarousel: function () {
      //Variables
      var $self, config, collection;
      //Variables values
      $self = this;
      config = $self.config;
      collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
            setAutoplay = $this.data('autoplay'),
            setAnimateIn = $this.data('animate-in'),
            setAnimateOut = $this.data('animate-out');

        $this.owlCarousel({
          loop: true,
          items: 1,
          autoplay: setAutoplay ? true : config['autoplay'],
          animateIn: setAnimateIn ? setAnimateIn : false,
          animateOut: setAnimateOut ? setAnimateOut : false,
          onTranslate: function(event) {
            $(event.target.children[0].children).addClass('js-origin');
          },
          onTranslated: function(event) {
            $(event.target.children[0].children).removeClass('js-origin');
          }
        });

        //Actions
        collection = collection.add($this);
      });
    }

  }

})(jQuery);

/**
 * Carousel wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  //Back Slide Effect
  Swiper.prototype.plugins.backSlide = function (swiper) {
    if (swiper.params.effect !== 'backSlide') return;

    return {
      onSetTranslate: function () {
        var slidesWrapper = swiper.wrapper;

        $(slidesWrapper).addClass('js-origin');
      },
      onSetTransition: function () {
        var slideActive = swiper.slides[swiper.activeIndex],
            nextIndex = function () {
              if (swiper.activeIndex - 1 != -1) {
                return swiper.activeIndex - 1;
              } else {
                return 0;
              }
            },
            slideNext = swiper.slides[nextIndex()];

        console.log(swiper.slides[swiper.activeIndex - 1]);

        $(slideActive).addClass('js-back-slide-in');
        $(slideNext).addClass('js-back-slide-out');
      },
      onTransitionEnd: function () {
        var slidesWrapper = swiper.wrapper;

        setTimeout(function() {
          $(slidesWrapper).removeClass('js-origin');

          for (var i = 0; i < swiper.slides.length; i++) {
            var allSlides = swiper.slides[i];

            $(allSlides).removeClass('js-back-slide-in js-back-slide-out');
          }
        }, 800);
      }
    };
  };

  $.HSCore.components.HSCarouselSwiper = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Carousel Swiper wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initCarouselSwiper();

      return this.pageCollection;
    },

    initCarouselSwiper: function () {
      //Variables
      var $self, config, collection;
      //Variables values
      $self = this;
      config = $self.config;
      collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
            setAutoplay = $this.data('autoplay'),
            setEffect = $this.data('effect');

        i = new Swiper(el, {
          slidesPerView: 1,
          loop: true,
          autoplay: setAutoplay ? 2000 : false,

          effect: setEffect ? setEffect : 'slide'
        });

        //Actions
        collection = collection.add($this);
      });
    }

  }

})(jQuery);

/**
 * Carousel wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSCarousel = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      autoplay: false,
      infinite: true
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Carousel wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initCarousel();

      return this.pageCollection;

    },

    initCarousel: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          id = $this.attr('id'),

          //Markup elements
          target = $this.data('nav-for'),
          isThumb = $this.data('is-thumbs'),
          arrowsClasses = $this.data('arrows-classes'),
          arrowLeftClasses = $this.data('arrow-left-classes'),
          arrowRightClasses = $this.data('arrow-right-classes'),
          pagiClasses = $this.data('pagi-classes'),
          pagiHelper = $this.data('pagi-helper'),
          $pagiIcons = $this.data('pagi-icons'),
          $prevMarkup = '<div class="js-prev ' + arrowsClasses + ' ' + arrowLeftClasses + '"></div>',
          $nextMarkup = '<div class="js-next ' + arrowsClasses + ' ' + arrowRightClasses + '"></div>',

          //Setters
          setSlidesToShow = $this.data('slides-show'),
          setSlidesToScroll = $this.data('slides-scroll'),
          setAutoplay = $this.data('autoplay'),
          setAnimation = $this.data('animation'),
          setEasing = $this.data('easing'),
          setFade = $this.data('fade'),
          setSpeed = $this.data('speed'),
          setSlidesRows = $this.data('rows'),
          setCenterMode = $this.data('center-mode'),
          setCenterPadding = $this.data('center-padding'),
          setPauseOnHover = $this.data('pause-hover'),
          setVariableWidth = $this.data('variable-width'),
          setInitialSlide = $this.data('initial-slide'),
          setVertical = $this.data('vertical'),
          setRtl = $this.data('rtl'),
          setInEffect = $this.data('in-effect'),
          setOutEffect = $this.data('out-effect'),
          setInfinite = $this.data('infinite'),
          setDataTitlePosition = $this.data('title-pos-inside'),
          setFocusOnSelect = $this.data('focus-on-select'),
          setLazyLoad = $this.data('lazy-load');

        $this.on('init', function (event, slick) {
          $(slick.$slides).css('height', 'auto');
        });

        if (setInEffect && setOutEffect) {
          $this.on('init', function (event, slick) {
            $(slick.$slides).addClass('single-slide');
          });
        }

        if (pagiHelper) {
          $this.on('init', function (event, slick) {
            var $pagination = $this.find('.js-pagination');

            if (!$pagination.length) return;

            $pagination.append('<span class="u-dots-helper"></span>');
          });
        }

        if (isThumb) {
          $('#' + id).on('click', '.js-slide', function (e) {
            e.stopPropagation();
            //Variables
            var i;

            //Variables values
            i = $(this).data('slick-index');

            if ($('#' + id).slick('slickCurrentSlide') !== i) {
              $('#' + id).slick('slickGoTo', i);
            }
          });
        }

        $this.on('init', function (event, slider) {
          var $pagination = $this.find('.js-pagination');

          if (!$pagination.length) return;

          $($pagination[0].children[0]).addClass('slick-current');
        });

        $this.slick({
          autoplay: setAutoplay ? true : false,
          autoplaySpeed: setSpeed ? setSpeed : 3000,

          cssEase: setAnimation ? setAnimation : 'ease',
          easing: setEasing ? setEasing : 'linear',
          fade: setFade ? true : false,

          infinite: setInfinite ? true : false,
          initialSlide: setInitialSlide ? setInitialSlide - 1 : 0,
          slidesToShow: setSlidesToShow ? setSlidesToShow : 1,
          slidesToScroll: setSlidesToScroll ? setSlidesToScroll : 1,
          centerMode: setCenterMode ? true : false,
          variableWidth: setVariableWidth ? true : false,
          pauseOnHover: setPauseOnHover ? true : false,
          rows: setSlidesRows ? setSlidesRows : 1,
          vertical: setVertical ? true : false,
          verticalSwiping: setVertical ? true : false,
          rtl: setRtl ? true : false,
          centerPadding: setCenterPadding ? setCenterPadding : 0,
          focusOnSelect: setFocusOnSelect ? true : false,
          lazyLoad: setLazyLoad ? setLazyLoad : false,

          asNavFor: target ? target : false,
          prevArrow: arrowsClasses ? $prevMarkup : false,
          nextArrow: arrowsClasses ? $nextMarkup : false,
          dots: pagiClasses ? true : false,
          dotsClass: 'js-pagination ' + pagiClasses,
          customPaging: function (slider, i) {
            var title = $(slider.$slides[i]).data('title');

            if (title && $pagiIcons) {
              return '<span>' + title + '</span>' + $pagiIcons;
            } else if ($pagiIcons) {
              return '<span></span>' + $pagiIcons;
            } else if (title && setDataTitlePosition) {
              return '<span>' + title + '</span>';
            } else if (title && !setDataTitlePosition) {
              return '<span></span>' + '<strong class="u-dot-title">' + title + '</strong>';
            } else {
              return '<span></span>';
            }
          }
        });

        $this.on('beforeChange', function (event, slider, currentSlide, nextSlide) {
          var $pagination = $this.find('.js-pagination');

          if (!$pagination.length) return;

          if (currentSlide > nextSlide) {
            $($pagination[0].children).removeClass('slick-active-right');
            $($pagination[0].children[nextSlide]).addClass('slick-active-right');
          } else {
            $($pagination[0].children).removeClass('slick-active-right');
          }

          $($pagination[0].children).removeClass('slick-current');
          setTimeout(function () {
            $($pagination[0].children[nextSlide]).addClass('slick-current');
          }, .25);
        });

        if (setInEffect && setOutEffect) {
          $this.on('afterChange', function (event, slick, currentSlide, nextSlide) {
            $(slick.$slides).removeClass('animated set-position ' + setInEffect + ' ' + setOutEffect);
          });

          $this.on('beforeChange', function (event, slick, currentSlide) {
            $(slick.$slides[currentSlide]).addClass('animated ' + setOutEffect);
          });

          $this.on('setPosition', function (event, slick) {
            $(slick.$slides[slick.currentSlide]).addClass('animated set-position ' + setInEffect);
          });
        }

        //Actions
        collection = collection.add($this);
      });
    },

    /**
     * Implementation of text animation.
     *
     * @param jQuery carousel
     * @param String textAnimationSelector
     *
     * @requires charming.js, anime.js, textfx.js
     *
     * @return undefined
     */
    initTextAnimation: function(carousel, textAnimationSelector) {

      if (!window.TextFx || !window.anime || !carousel.length) return;

      var $text = carousel.find(textAnimationSelector);

      if (!$text.length) return;

      $text.each(function (i, el) {

        var $this = $(el);

        if (!$this.data('TextFx')) {

          $this.data('TextFx', new TextFx($this.get(0)));

        }

      });


      carousel.on('beforeChange', function (event, slick, currentSlide, nextSlide) {

        var targets = slick.$slider
          .find('.slick-track')
          .children();

        var currentTarget = targets.eq(currentSlide),
          nextTarget = targets.eq(nextSlide);

        currentTarget = currentTarget.find(textAnimationSelector);
        nextTarget = nextTarget.find(textAnimationSelector);

        if (currentTarget.length) {
          currentTarget.data('TextFx').hide(currentTarget.data('effect') ? currentTarget.data('effect') : 'fx1');
        }

        if (nextTarget.length) {
          nextTarget.data('TextFx').show(nextTarget.data('effect') ? nextTarget.data('effect') : 'fx1');
        }

      });

    }
  }

})(jQuery);

/**
 * Chart Pies wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires appear.js (v1.0.3), circles.js (v0.0.6)
 *
 */
;
(function($) {
  'use strict';

  $.HSCore.components.HSChartPie = {

    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      bounds: -100,
      debounce: 10,
      rtl: false,
      wrpClass: 'circles-wrp',
      textClass: 'circles-text',
      valueStrokeClass: 'circles-valueStroke',
      maxValueStrokeClass: 'circles-maxValueStroke',
      styleWrapper: true,
      styleText: true
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     *
     *
     * @var
     */
    appearCollectionIds: [],

    /**
     * Initialization of ChartPie wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */
    init: function(selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initCircles();

      return this.pageCollection;

    },

    /**
     * Initialization of each Circle of the page.
     *
     * @return undefined
     */
    initCircles: function() {

      var lastItem = this.pageCollection.last(),
        lastId = 0,
        self = this;


      if (lastItem.length) {
        lastId = +lastItem.attr('id').substring(lastItem.attr('id').lastIndexOf('-') + 1);
      }

      this.collection.each(function(i, el) {

        var $this = $(el),
          id = 'hs-pie-' + (lastId + (i + 1)),
          value = 0;

        $this.attr('id', id);

        if (!$this.data('circles-scroll-animate')) {
          value = $this.data('circles-value') || 0;
        } else {
          $this.data('reminded-value', $this.data('circles-value') || 0);
          self.appearCollectionIds.push('#' + id);
        }

        var circle = Circles.create({
          id: id,
          radius: $this.data('circles-radius') || 80,
          value: value,
          maxValue: $this.data('circles-max-value') || 100,
          width: $this.data('circles-stroke-width') || 10,
          text: function(value) {
            return value + ($this.data('circles-additional-text') || ''); },
          colors: [$this.data('circles-bg-color') || '#72c02c', $this.data('circles-fg-color') || '#eeeeee'],
          duration: $this.data('circles-duration') || 1000,
          wrpClass: self.config['wrpClass'],
          textClass: self.config['textClass'],
          valueStrokeClass: self.config['valueStrokeClass'],
          maxValueStrokeClass: self.config['maxValueStrokeClass'],
          styleWrapper: self.config['styleWrapper'],
          styleText: self.config['styleText']
        });

        $this.data('circle', circle);

        $this.find('.' + self.config['textClass']).css({
          'font-size': $this.data('circles-font-size'),
          'font-weight': $this.data('circles-font-weight'),
          'color': $this.data('circles-color')
        });


        if (self.config['rtl']) {
          $this.find('svg').css('transform', 'matrix(-1, 0, 0, 1, 0, 0)');
        }

        self.pageCollection = self.pageCollection.add($this);

      });

      if (self.appearCollectionIds.length) self._initAppear();

    },

    /**
     * Updates value of the chart pie when an item has appeared in the visible region.
     *
     * @return undefined
     */
    _initAppear: function() {

      var self = this;

      appear({
        bounds: self.config['bounds'],
        debounce: self.config['debounce'],
        elements: function() {
          return document.querySelectorAll(self.appearCollectionIds.join(','));
        },
        appear: function(element) {

          element = $(element);

          element.data('circle').update(element.data('reminded-value'));

        }
      });

    },

    /**
     * Returns item by index or entire collection in case when index has not been passed.
     *
     * @param Number index
     *
     * @return jQuery
     */
    get: function(index) {
      if (index && $.isNumeric(index)) return this.pageCollection.eq(index);

      return this.pageCollection;
    },

    /**
     * Returns item by id.
     *
     * @param String id
     *
     * @return circle
     */
    getById: function(id) {
      if (id && this.pageCollection.filter('#' + id).length) return this.pageCollection.filter('#' + id);

      return null;
    },

    /**
     * Returns object of circle class (for the access to circle API) by index.
     *
     * @param Number index
     *
     * @return circle
     */
    getCircleAPI: function(index) {
      if (index && $.isNumeric(index) && this.pageCollection.eq(index).length) return this.pageCollection.eq(index).data('circle');

      return null;
    },

    /**
     * Returns object of circle class (for the access to circle API) by id.
     *
     * @param String id
     *
     * @return circle
     */
    getCircleAPIById: function(id) {
      if (id && this.pageCollection.filter('#' + id).length) return this.pageCollection.filter('#' + id).data('circle');

      return null;
    }

  }

})(jQuery);

/**
 * Charts wrapper.
 * 
 * @author Htmlstream 
 * @version 1.0
 * @requires sparkline.js (v2.1.2), peity.js (v3.2.1)
 *
 */
;(function($){
	'use strict';

	$.HSCore.components.HSChart = {

		/**
		 * Sparkline Charts
		 */
		sparkline: {

			/**
			 * Base plugin's configuration.
			 * 
			 * @var Object _baseConfig
			 */
			_baseConfig: {
				fillColor: '#72c02c',
				lineColor: '#72c02c',
				barColor: '#72c02c'
			},

			/**
			 * Collection of all initialized items of the page.
			 * 
			 * @var jQuery _pageCollection
			 */
			_pageCollection: $(),

			/**
			 * Initializes new collection of items.
			 * 
			 * @param jQuery collections
			 *
			 * @return jQuery
			 */
			init: function(collection){

				var self = this;

				if(!collection || !collection.length) return $();

				return collection.each(function(i, el){

					var $this = $(el),
							config = $.extend(true, {}, self._baseConfig, $this.data());

					$this.sparkline( $this.data('data'), config);

					self._pageCollection = self._pageCollection.add( $this );

				});

			},

			/**
			 * Returns entire collection of initialized items or single initialized
			 * item (in case with index parameter).
			 * 
			 * @param Number index
			 *
			 * @return jQuery
			 */
			get: function(index) {

				if(index) {
					return this._pageCollection.eq(index);
				}

				return this._pageCollection;

			}

		},

		/**
		 * Peity Charts
		 */
		peity: {

			/**
			 * Base plugin's configuration.
			 * 
			 * @var Object _baseConfig
			 */
			_baseConfig: {
				fill: ''
			},

			/**
			 * Collection of all initialized items of the page.
			 * 
			 * @var jQuery _pageCollection
			 */
			_pageCollection: $(),

			/**
			 * Initializes new collection of items.
			 * 
			 * @param jQuery collections
			 *
			 * @return jQuery
			 */
			init: function(collection, config){

				var self = this;

				if(!collection || !collection.length) return $();

				config = config && $.isPlainObject(config) ? $.extend(true, {}, this._baseConfig, config) : this._baseConfig;


				return collection.each(function(i, el){

					var $this = $(el),
							currentConfig = $.extend(true, {}, config, $this.data());

					$this.peity( $this.data('peity-type'), currentConfig );

					self._pageCollection = self._pageCollection.add( $this );

				});

			},

			/**
			 * Returns entire collection of initialized items or single initialized
			 * item (in case with index parameter).
			 * 
			 * @param Number index
			 *
			 * @return jQuery
			 */
			get: function(index) {

				if(index) {
					return this._pageCollection.eq(index);
				}

				return this._pageCollection;

			}

		}
		
	};

})(jQuery);
/**
 * Count quantity wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSCountQty = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Count quantity wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initCountQty();

      return this.pageCollection;

    },

    initCountQty: function () {
      //Variables
      var $self = this,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
            $plus = $this.find('.js-plus'),
            $minus = $this.find('.js-minus'),
            $result = $this.find('.js-result'),
            resultVal = parseInt($result.val());

        $plus.on('click', function (e) {
          e.preventDefault();

          resultVal += 1;

          $result.val(resultVal);
        });

        $minus.on('click', function (e) {
          e.preventDefault();

          if (resultVal >= 1) {
            resultVal -= 1;

            $result.val(resultVal);
          } else {
            return false;
          }
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);
/**
 * Countdown wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires Countdown (v2.2.0, http://hilios.github.io/jQuery.countdown), circles.js (v0.0.6)
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSCountdown = {

    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      yearsElSelector: '.years',
      monthElSelector: '.month',
      daysElSelector: '.days',
      hoursElSelector: '.hours',
      minutesElSelector: '.minutes',
      secondsElSelector: '.seconds',
      // circles
      circles: false,
      wrpClass: 'wrpClass',
      textClass: 'textClass',
      valueStrokeClass: 'valueStrokeClass',
      maxValueStrokeClass: 'maxValueStrokeClass',
      styleWrapper: 'styleWrapper',
      styleText: 'styleText'
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     *
     *
     * @var
     */
    _circlesIds: [0],

    /**
     * Initialization of Countdown wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */
    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initCountdowns();

      return this.pageCollection;

    },

    /**
     * Initialization of each Countdown of the page.
     *
     * @return undefined
     */
    initCountdowns: function () {

      var self = this;

      this.collection.each(function (i, el) {

        var $this = $(el),

          options = {
            endDate: $this.data('end-date') ? new Date($this.data('end-date')) : new Date(),
            startDate: $this.data('start-date') ? new Date($this.data('start-date')) : new Date(),
            yearsEl: $this.find(self.config['yearsElSelector']),
            yearsFormat: $this.data('years-format'),
            monthEl: $this.find(self.config['monthElSelector']),
            monthFormat: $this.data('month-format'),
            daysEl: $this.find(self.config['daysElSelector']),
            daysFormat: $this.data('days-format'),
            hoursEl: $this.find(self.config['hoursElSelector']),
            hoursFormat: $this.data('hours-format'),
            minutesEl: $this.find(self.config['minutesElSelector']),
            minutesFormat: $this.data('minutes-format'),
            secondsEl: $this.find(self.config['secondsElSelector']),
            secondsFormat: $this.data('seconds-format')
          };

        if (self.config['circles'] && $this.data('start-date')) self._initPiesImplementation($this, options);
        else self._initBaseImplementation($this, options);

        self.pageCollection = self.pageCollection.add($this);

      });

    },

    /**
     *
     * @param jQuery container
     * @param Object options
     *
     * @return undefined
     */
    _initBaseImplementation: function (container, options) {

      container.countdown(options.endDate, function (e) {

        if (options.yearsEl.length) {
          options.yearsEl.text(e.strftime(options.yearsFormat));
        }

        if (options.monthEl.length) {
          options.monthEl.text(e.strftime(options.monthFormat));
        }

        if (options.daysEl.length) {
          options.daysEl.text(e.strftime(options.daysFormat));
        }

        if (options.hoursEl.length) {
          options.hoursEl.text(e.strftime(options.hoursFormat));
        }

        if (options.minutesEl.length) {
          options.minutesEl.text(e.strftime(options.minutesFormat));
        }

        if (options.secondsEl.length) {
          options.secondsEl.text(e.strftime(options.secondsFormat));
        }

      });

    },

    /**
     *
     * @param jQuery container
     * @param Object options
     *
     * @return undefined
     */
    _initPiesImplementation: function (container, options) {

      var self = this,
        id,
        oneDay = 24 * 60 * 60 * 1000;

      // prepare elements

      if (options.yearsEl.length) {

        self._preparePieItem(options.yearsEl, {
          maxValue: (options.endDate.getFullYear() - options.startDate.getFullYear()),
          radius: container.data('circles-radius'),
          width: container.data('circles-stroke-width'),
          'fg-color': container.data('circles-fg-color'),
          'bg-color': container.data('circles-bg-color'),
          'additional-text': container.data('circles-additional-text'),
          'font-size': container.data('circles-font-size')
        });

      }

      if (options.monthEl.length) {

        self._preparePieItem(options.monthEl, {
          maxValue: Math.round(Math.abs((options.endDate.getTime() - options.startDate.getTime()) / (oneDay))) / 12,
          radius: container.data('circles-radius'),
          width: container.data('circles-stroke-width'),
          'fg-color': container.data('circles-fg-color'),
          'bg-color': container.data('circles-bg-color'),
          'additional-text': container.data('circles-additional-text'),
          'font-size': container.data('circles-font-size')
        });

      }

      if (options.daysEl.length) {

        self._preparePieItem(options.daysEl, {
          maxValue: self._getDaysMaxValByFormat(options.daysFormat, options.startDate, options.endDate),
          radius: container.data('circles-radius'),
          width: container.data('circles-stroke-width'),
          'fg-color': container.data('circles-fg-color'),
          'bg-color': container.data('circles-bg-color'),
          'additional-text': container.data('circles-additional-text'),
          'font-size': container.data('circles-font-size')
        });

      }

      if (options.hoursEl.length) {

        self._preparePieItem(options.hoursEl, {
          maxValue: 60,
          radius: container.data('circles-radius'),
          width: container.data('circles-stroke-width'),
          'fg-color': container.data('circles-fg-color'),
          'bg-color': container.data('circles-bg-color'),
          'additional-text': container.data('circles-additional-text'),
          'font-size': container.data('circles-font-size')
        });

      }

      if (options.minutesEl.length) {

        self._preparePieItem(options.minutesEl, {
          maxValue: 60,
          radius: container.data('circles-radius'),
          width: container.data('circles-stroke-width'),
          'fg-color': container.data('circles-fg-color'),
          'bg-color': container.data('circles-bg-color'),
          'additional-text': container.data('circles-additional-text'),
          'font-size': container.data('circles-font-size')
        });

      }

      if (options.secondsEl.length) {

        self._preparePieItem(options.secondsEl, {
          maxValue: 60,
          radius: container.data('circles-radius'),
          width: container.data('circles-stroke-width'),
          'fg-color': container.data('circles-fg-color'),
          'bg-color': container.data('circles-bg-color'),
          'additional-text': container.data('circles-additional-text'),
          'font-size': container.data('circles-font-size')
        });

      }

      // init countdown
      container.countdown(options.endDate, function (e) {

        // years
        if (options.yearsEl.length) {
          options.yearsEl.data('circle').update(e.strftime(options.yearsFormat));
        }

        // months
        if (options.monthEl.length) {

          options.monthEl.data('circle').update(e.strftime(options.monthFormat));
        }

        // days
        if (options.daysEl.length) {
          options.daysEl.data('circle').update(e.strftime(options.daysFormat));
        }

        // hours
        if (options.hoursEl.length) {
          options.hoursEl.data('circle').update(e.strftime(options.hoursFormat));
        }

        // minutes
        if (options.minutesEl.length) {
          options.minutesEl.data('circle').update(e.strftime(options.minutesFormat));
        }

        // seconds
        if (options.secondsEl.length) {
          options.secondsEl.data('circle').update(e.strftime(options.secondsFormat));
        }

      });

    },

    /**
     *
     * @param jQuery el
     * @param Object options
     *
     * @return undefined
     */
    _preparePieItem: function (el, options) {

      var self = this,
        id = self._circlesIds[self._circlesIds.length - 1] + 1;
      self._circlesIds.push(id);

      el.attr('id', 'hs-countdown-element-' + id);

      el.data('circle', Circles.create({
        id: 'hs-countdown-element-' + id,
        radius: options['radius'] || 80,
        value: 0,
        maxValue: options['maxValue'] || 100,
        width: options['width'] || 10,
        text: function (value) {
          return value + (options['additional-text'] || '');
        },
        colors: [options['bg-color'] || '#eeeeee', options['fg-color'] || '#72c02c'],
        duration: 0,
        wrpClass: self.config['wrpClass'],
        textClass: self.config['textClass'],
        valueStrokeClass: self.config['valueStrokeClass'],
        maxValueStrokeClass: self.config['maxValueStrokeClass'],
        styleWrapper: self.config['styleWrapper'],
        styleText: self.config['styleText']
      }));

      if (options['font-size']) {
        el.find('.' + self.config['textClass']).css('font-size', options['font-size'] + 'px');
      }

    },

    /**
     *
     * @param String format
     * @param Date startDate
     * @param Date endDate
     *
     * @return Number
     */
    _getDaysMaxValByFormat: function (format, startDate, endDate) {

      var oneDay = 24 * 60 * 60 * 1000;

      switch (format) {

        case '%D':

          return Math.round(Math.abs((endDate.getTime() - startDate.getTime()) / (oneDay)));

          break;

        default:

          return 31;

      }

    }

  }

})(jQuery);

/**
 * Counter wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires appear.js (v1.0.3)
 *
 */
;(function($){
	'use strict';

	$.HSCore.components.HSCounter = {

		/**
		 *
		 *
		 * @var Object _baseConfig
		 */
		_baseConfig : {
			bounds: -100,
			debounce: 10,
			time: 6000,
			fps: 60,
			commaSeparated: false
		},

		/**
		 *
		 *
		 * @var jQuery _pageCollection
		 */
		_pageCollection : $(),

		/**
		 * Initialization of Counter wrapper.
		 *
		 * @param String selector (optional)
		 * @param Object config (optional)
		 *
		 * @return jQuery pageCollection - collection of initialized items.
		 */
		init: function(selector, config){

			this.collection = $(selector) && $(selector).length ? $(selector) : $();
			if(!this.collection.length) return;

			this.config = config && $.isPlainObject(config) ? $.extend({}, this._baseConfig, config) : this._baseConfig;
			this.config.itemSelector = selector;

			this.initCounters();

		},

		/**
		 * Initialization of each Counter of the page.
		 *
		 * @return undefined
		 */
		initCounters: function() {

			var self = this;

			appear({

				bounds: self.config['bounds'],
				debounce: self.config['debounce'],

				init: function() {

					self.collection.each(function(i, el) {

						var $item = $(el),
								value = parseInt($item.text(), 10);

							$item.text('0').data('value', value);

							self._pageCollection = self._pageCollection.add($item);

					});

				},

				elements: function() {
					return document.querySelectorAll(self.config['itemSelector']);
				},

				appear: function(el) {

					var $item = $(el),
							counter = 1,
							endValue = $item.data('value'),
							iterationValue = parseInt(endValue / ((self.config['time'] / self.config['fps'])), 10),
							isCommaSeparated = $item.data('comma-separated'),
							isReduced = $item.data('reduce-thousands-to');

					if(iterationValue == 0) iterationValue = 1;

					$item.data('intervalId', setInterval(function(){

						if(isCommaSeparated){

							$item.text(self.getCommaSeparatedValue(counter+= iterationValue));

						}
						else if(isReduced) {
							$item.text(self.getCommaReducedValue(counter+= iterationValue, isReduced));
						}
						else {

							$item.text(counter+= iterationValue);
						}

						if(counter > endValue) {

							clearInterval($item.data('intervalId'));
							if(isCommaSeparated) {
								$item.text(self.getCommaSeparatedValue(endValue));
							}
							else if(isReduced) {
								$item.text(self.getCommaReducedValue(endValue, isReduced));
							}
							else {
								$item.text(endValue);
							}

							return;

						}

					}, self.config['time'] / self.config['fps']));

				}

			});

		},

		/**
		 *
		 *
		 * @param Number value
		 *
		 * @return String
		 */
		getCommaReducedValue: function(value, additionalText) {

			return parseInt(value / 1000, 10) + additionalText;

		},

		/**
		 * Returns comma separated value.
		 *
		 * @param Number value
		 *
		 * @return String
		 */
		getCommaSeparatedValue: function(value) {

			value = new String(value);

			switch(value.length) {

				case 4:

					return value.substr(0, 1) + ',' + value.substr(1);

				break;

				case 5:

					return value.substr(0, 2) + ',' + value.substr(2);

				break;

				case 6:

					return value.substr(0, 3) + ',' + value.substr(3);

				break;
				case 7:

					value = value.substr(0, 1) + ',' + value.substr(1);
					return value.substr(0, 5) + ',' + value.substr(5);

				break;

				case 8:

					value = value.substr(0, 2) + ',' + value.substr(2);
					return value.substr(0, 6) + ',' + value.substr(6);

				break;

				case 9:

					value = value.substr(0, 3) + ',' + value.substr(3);
					return value.substr(0, 7) + ',' + value.substr(7);

				break;

				case 10:

					value = value.substr(0, 1) + ',' + value.substr(1);
					value = value.substr(0, 5) + ',' + value.substr(5);
					return value.substr(0, 9) + ',' + value.substr(9);

				break;

				default:

					return value;

			}

		}

	};

})(jQuery);
/**
 * Filter wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */

;(function ($) {
  'use strict';

  $.HSCore.components.HSCubeportfolio = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Filter wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initCubeportfolio();

      return this.pageCollection;

    },

    initCubeportfolio: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          setControls = $this.data('controls'),
          setLayout = $this.data('layout'),
          setXGap = $this.data('x-gap'),
          setYGap = $this.data('y-gap'),
          setAnimation = $this.data('animation'),
          setCaptionAnimation = $this.data('caption-animation'),
          setDefaultMediaQueries = [{
            width: 1500,
            cols: 3
          }, {
            width: 1100,
            cols: 3
          }, {
            width: 800,
            cols: 3
          }, {
            width: 480,
            cols: 2,
            options: {
              caption: '',
              gapHorizontal: 10,
              gapVertical: 10
            }
          }],
          setMeidaQueries = JSON.parse(el.getAttribute('data-media-queries'));

        $this.cubeportfolio({
          filters: setControls,
          layoutMode: setLayout,
          defaultFilter: '*',
          sortToPreventGaps: true,
          gapHorizontal: setXGap,
          gapVertical: setYGap,
          animationType: setAnimation,
          gridAdjustment: 'responsive',
          mediaQueries: setMeidaQueries ? setMeidaQueries : setDefaultMediaQueries,
          caption: setCaptionAnimation ? setCaptionAnimation : 'overlayBottomAlong',
          displayType: 'sequentially',
          displayTypeSpeed: 100,

          // lightbox
          lightboxDelegate: '.cbp-lightbox',
          lightboxGallery: true,
          lightboxTitleSrc: 'data-title',
          lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

          // singlePageInline
          singlePageInlineDelegate: '.cbp-singlePageInline',
          singlePageInlinePosition: 'below',
          singlePageInlineInFocus: true,
          singlePageInlineCallback: function (url, element) {
            // to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
            var t = this;

            $.ajax({
              url: url,
              type: 'GET',
              dataType: 'html',
              timeout: 30000
            })
              .done(function (result) {

                t.updateSinglePageInline(result);

              })
              .fail(function () {
                t.updateSinglePageInline('AJAX Error! Please refresh the page!');
              });
          },

          // singlePage popup
          singlePageDelegate: '.cbp-singlePage',
          singlePageDeeplinking: true,
          singlePageStickyNavigation: true,
          singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
          singlePageCallback: function (url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;

            $.ajax({
              url: url,
              type: 'GET',
              dataType: 'html',
              timeout: 10000
            })
              .done(function (result) {
                t.updateSinglePage(result);
              })
              .fail(function () {
                t.updateSinglePage('AJAX Error! Please refresh the page!');
              });
          }
        });

        //Actions
        collection = collection.add($this);
      });
    }
  };

})(jQuery);

/**
 * Datepicker wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSDatepicker = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      dateFormat: 'dd.mm.yy',
      dayNamesMin: [
        'Sun',
        'Mon',
        'Tue',
        'Wed',
        'Thu',
        'Fri',
        'Sat'
      ],
      prevText: '<i class="fa fa-angle-left"></i>',
      nextText: '<i class="fa fa-angle-right"></i>'
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Datepicker wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initDatepicker();

      return this.pageCollection;

    },

    initDatepicker: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          to = $this.data('to'),
          rangeBoolean = $this.data('range');

        if (rangeBoolean == 1) {
          var dateFrom = $this.datepicker({
            dateFormat: config['dateFormat'],
            defaultDate: '+1w',
            dayNamesMin: config['dayNamesMin'],
            numberOfMonths: 1,
            showOtherMonths: true,
            prevText: config['prevText'],
            nextText: config['nextText'],
            beforeShow: $self.datepickerCustomClass
          }).on('change', function () {
            dateTo.datepicker('option', 'minDate', $self.getDate(this));
          });

          var dateTo = $('#' + to).datepicker({
            dateFormat: config['dateFormat'],
            defaultDate: '+1w',
            dayNamesMin: config['dayNamesMin'],
            numberOfMonths: 1,
            showOtherMonths: true,
            prevText: config['prevText'],
            nextText: config['nextText'],
            beforeShow: $self.datepickerCustomClass
          }).on('change', function () {
            dateFrom.datepicker('option', 'maxDate', $self.getDate(this));
          });
        } else {
          $this.datepicker({
            dateFormat: config['dateFormat'],
            dayNamesMin: config['dayNamesMin'],
            showOtherMonths: true,
            prevText: config['prevText'],
            nextText: config['nextText'],
            beforeShow: $self.datepickerCustomClass
          });
        }

        //Actions
        collection = collection.add($this);
      });
    },

    datepickerCustomClass: function (el, attr) {
      var arrayOfClasses, customClass, i;

      arrayOfClasses = attr.input.context.className.split(' ');

      for (i = 0; arrayOfClasses.length > i; i++) {
        if (arrayOfClasses[i].substring(0, 6) == 'u-date') {
          customClass = arrayOfClasses[i];
        }
      }

      $('#ui-datepicker-div').addClass(customClass);
    },

    getDate: function (element) {
      var $self = this,
        date,
        config = $self.config;

      try {
        date = $.datepicker.parseDate(config['dateFormat'], element.value);
      } catch (error) {
        date = null;
      }

      return date;
    }

  };

})(jQuery);

/**
 * Dropdown component.
 *
 * @author Htmlstream
 * @version 1.0
 */
;
(function($) {
  'use strict';

  $.HSCore.components.HSDropdown = {

    /**
     * Base configuration of the component.
     *
     * @private
     */
    _baseConfig: {

      dropdownEvent: 'click',
      dropdownType: 'simple',
      dropdownDuration: 300,
      dropdownEasing: 'linear',
      dropdownAnimationIn: 'fadeIn',
      dropdownAnimationOut: 'fadeOut',
      dropdownHideOnScroll: true,
      dropdownHideOnBlur: false,
      dropdownDelay: 350,

      afterOpen: function(invoker){},
      afterClose: function(invoker){}
    },

    /**
     * Collection of all initialized items on the page.
     *
     * @private
     */
    _pageCollection: $(),

    /**
     * Initialization.
     *
     * @param {jQuery} collection
     * @param {Object} config
     *
     * @public
     * @return {jQuery}
     */
    init: function(collection, config) {

      var self;

      if( !collection || !collection.length ) return;

      self = this;

      collection.each(function(i, el){

        var $this = $(el), itemConfig;

        if( $this.data('HSDropDown') ) return;

        itemConfig = config && $.isPlainObject(config) ? 
                     $.extend(true, {}, self._baseConfig, config, $this.data()) :
                     $.extend(true, {}, self._baseConfig, $this.data());

        switch( itemConfig.dropdownType ) {

          case 'css-animation' :

            $this.data('HSDropDown', new DropdownCSSAnimation($this, itemConfig));

          break;

          case 'jquery-slide' : 

            $this.data('HSDropDown', new DropdownJSlide($this, itemConfig));

          break;

          default : 

            $this.data('HSDropDown', new DropdownSimple($this, itemConfig));

        }

        self._pageCollection = self._pageCollection.add( $this );
        self._bindEvents( $this, itemConfig.dropdownEvent, itemConfig.dropdownDelay );

      });

      $(document).on('keyup.HSDropDown', function(e){

        if(e.keyCode && e.keyCode == 27) {

          self._pageCollection.each( function(i, el){

            $(el).data('HSDropDown').hide();

          } );

        }

      });

      $(window).on('scroll.HSDropDown', function(e){

        self._pageCollection.each(function(i, el){

          var DropDown = $(el).data('HSDropDown');

          if(DropDown.getOption('dropdownHideOnScroll')) {

            DropDown.hide();

          }

        });

      });

      $(window).on('resize.HSDropDown', function(e){

        if(self._resizeTimeOutId) clearTimeout(self._resizeTimeOutId);

        self._resizeTimeOutId = setTimeout(function(){

          self._pageCollection.each(function(i, el){

            var DropDown = $(el).data('HSDropDown');

            DropDown.smartPosition(DropDown.target);

          });

        }, 50);

      });

      return collection;

    },

    /**
     * Binds necessary events.
     * 
     * @param {jQuery} $invoker
     * @param {String} eventType
     * @param {Number} delay
     * @private 
     */
    _bindEvents: function( $invoker, eventType, delay ) {

      var $dropdown = $($invoker.data('dropdown-target'));

      if( eventType == 'hover' && !_isTouch() ) {

        $invoker.on('mouseenter.HSDropDown', function(e) {

          var $invoker = $(this),
              HSDropDown = $invoker.data('HSDropDown');

          if( !HSDropDown ) return;

          if( HSDropDown.dropdownTimeOut ) clearTimeout( HSDropDown.dropdownTimeOut );
          HSDropDown.show();

        })
        .on('mouseleave.HSDropDown', function(e) {

          var $invoker = $(this),
              HSDropDown = $invoker.data('HSDropDown');

          if( !HSDropDown ) return;

          HSDropDown.dropdownTimeOut = setTimeout(function(){

            HSDropDown.hide();

          }, delay);

        });

        if( $dropdown.length ) {
          $dropdown.on('mouseenter.HSDropDown', function(e){

            var HSDropDown = $invoker.data('HSDropDown');

            if( HSDropDown.dropdownTimeOut ) clearTimeout( HSDropDown.dropdownTimeOut );
            HSDropDown.show();

          })
          .on('mouseleave.HSDropDown', function(e) {

            var HSDropDown = $invoker.data('HSDropDown');

            HSDropDown.dropdownTimeOut = setTimeout(function() {
              HSDropDown.hide();
            }, delay);

          });
        }

      }
      else {

        $invoker.on('click.HSDropDown', function(e){

          var $invoker = $(this);

          if( !$invoker.data('HSDropDown') ) return;

          $invoker.data('HSDropDown').toggle();

          e.stopPropagation();
          e.preventDefault();

        });

      }

    }
  };

  function _isTouch() {
    return 'ontouchstart' in window;
  }

  /**
   * Abstract Dropdown class.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @abstract 
   */
  function AbstractDropdown(element, config) {

    if( !element.length ) return false;

    this.element = element;
    this.config = config;

    this.target = $(this.element.data('dropdown-target'));

    this.allInvokers = $('[data-dropdown-target="'+this.element.data('dropdown-target')+'"]');

    this.toggle = function() {
      if( !this.target.length ) return this;

      if( this.defaultState ) {
        this.show();
      }
      else {
        this.hide();
      }

      return this;
    };

    this.smartPosition = function( target ) {

      if(target.data('baseDirection')) {
        target.css(
          target.data('baseDirection').direction,
          target.data('baseDirection').value
        );
      }

      target.removeClass('u-dropdown--reverse-y');

      var $w = $(window),
          styles = getComputedStyle(target.get(0)),
          direction = Math.abs( parseInt( styles.left, 10) ) < 40 ? 'left' : 'right',
          targetOuterGeometry = target.offset();

      // horizontal axis
      if(direction == 'right') {

        if( !target.data('baseDirection') ) target.data('baseDirection', {
          direction: 'right',
          value: parseInt( styles.right, 10)
        } );

        if( targetOuterGeometry.left < 0 ) {

          target.css(
            'right',
            (parseInt( target.css('right'), 10 ) - (targetOuterGeometry.left - 10 )) * -1
          );

        }

      }
      else {

        if( !target.data('baseDirection') ) target.data('baseDirection', {
          direction: 'left',
          value: parseInt( styles.left, 10)
        } );

        if( targetOuterGeometry.left + target.outerWidth() > $w.width() ) {

          target.css(
            'left',
            (parseInt( target.css('left'), 10 ) - (targetOuterGeometry.left + target.outerWidth() + 10 - $w.width()))
          );

        }

      }

      // vertical axis
      if( targetOuterGeometry.top + target.outerHeight() - $w.scrollTop() > $w.height() ) {
        target.addClass('u-dropdown--reverse-y');
      }

    };

    this.getOption = function(option){
      return this.config[option] ? this.config[option] : null;
    };

    return true;
  }


  /**
   * DropdownSimple constructor.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @constructor 
   */
  function DropdownSimple(element, config) {
    if( !AbstractDropdown.call(this, element, config) ) return;

    Object.defineProperty(this, 'defaultState', {
      get: function() {
        return this.target.hasClass('u-dropdown--hidden');
      }
    });

    this.target.addClass('u-dropdown--simple');

    this.hide();
  }

  /**
   * Shows dropdown.
   *
   * @public 
   * @return {DropdownSimple}
   */
  DropdownSimple.prototype.show = function() {

    this.smartPosition(this.target);

    this.target.removeClass('u-dropdown--hidden');
    if( this.allInvokers.length ) this.allInvokers.attr('aria-expanded', 'true');
    this.config.afterOpen.call(this.target, this.element);

    return this;
  }

  /**
   * Hides dropdown.
   *
   * @public 
   * @return {DropdownSimple}
   */
  DropdownSimple.prototype.hide = function() {

    this.target.addClass('u-dropdown--hidden');
    if( this.allInvokers.length ) this.allInvokers.attr('aria-expanded', 'false');
    this.config.afterClose.call(this.target, this.element);

    return this;
  }

  /**
   * DropdownCSSAnimation constructor.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @constructor 
   */
  function DropdownCSSAnimation(element, config) {
    if( !AbstractDropdown.call(this, element, config) ) return;

    var self = this;

    this.target
        .addClass('u-dropdown--css-animation u-dropdown--hidden')
        .css('animation-duration', self.config.dropdownDuration + 'ms');

    Object.defineProperty(this, 'defaultState', {
      get: function() {
        return this.target.hasClass('u-dropdown--hidden');
      }
    });

    if(this.target.length) {

      this.target.on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(e){

        if( self.target.hasClass( self.config.dropdownAnimationOut ) ) {
          self.target.removeClass( self.config.dropdownAnimationOut )
                     .addClass('u-dropdown--hidden');


          if( self.allInvokers.length ) self.allInvokers.attr('aria-expanded', 'false');

          self.config.afterClose.call(self.target, self.element);
        }

        if( self.target.hasClass( self.config.dropdownAnimationIn ) ) {
          
          if( self.allInvokers.length ) self.allInvokers.attr('aria-expanded', 'true');

          self.config.afterOpen.call(self.target, self.element);
        }

        e.preventDefault();
        e.stopPropagation();
      });

    }
  }

  /**
   * Shows dropdown.
   *
   * @public 
   * @return {DropdownCSSAnimation}
   */
  DropdownCSSAnimation.prototype.show = function() {

    this.smartPosition(this.target);

    this.target.removeClass( 'u-dropdown--hidden' )
               .removeClass( this.config.dropdownAnimationOut )
               .addClass( this.config.dropdownAnimationIn );

  }

  /**
   * Hides dropdown.
   *
   * @public 
   * @return {DropdownCSSAnimation}
   */
  DropdownCSSAnimation.prototype.hide = function() {

    this.target.removeClass( this.config.dropdownAnimationIn )
               .addClass( this.config.dropdownAnimationOut );

  }

  /**
   * DropdownSlide constructor.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @constructor 
   */
  function DropdownJSlide(element, config) {
    if( !AbstractDropdown.call(this, element, config) ) return;

    this.target.addClass('u-dropdown--jquery-slide u-dropdown--hidden').hide();

    Object.defineProperty(this, 'defaultState', {
      get: function() {
        return this.target.hasClass('u-dropdown--hidden');
      }
    });
  }

  /**
   * Shows dropdown.
   *
   * @public 
   * @return {DropdownJSlide}
   */
  DropdownJSlide.prototype.show = function() {

    var self = this;

    this.smartPosition(this.target);

    this.target.removeClass('u-dropdown--hidden').stop().slideDown({
      duration: self.config.dropdownDuration,
      easing: self.config.dropdownEasing,
      complete: function(){
        self.config.afterOpen.call(self.target, self.element);
      }
    });

  }

  /**
   * Hides dropdown.
   *
   * @public 
   * @return {DropdownJSlide}
   */
  DropdownJSlide.prototype.hide = function() {

    var self = this;

    this.target.stop().slideUp({
      duration: self.config.dropdownDuration,
      easing: self.config.dropdownEasing,
      complete: function(){
        self.config.afterClose.call(self.target, self.element);
        self.target.addClass('u-dropdown--hidden');
      }
    });

  }

})(jQuery);

/**
 * File attachment wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSFileAttachment = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      input: '<div class="u-file-attach-v3 g-mb-15">\
               <h3 class="g-font-size-16 g-color-gray-dark-v2 mb-0">Drop files here or <span class="g-color-primary">Browse your device</span></h3>\
               <p class="g-font-size-14 g-color-gray-light-v2 mb-0">Maximum file size 10mb</p>\
              </div>',
      box: '<div class="js-result-list row"></div>',
      item: '<div class="js-result-list__item col-md-3 text-center">\
              <div class="g-pa-10 g-brd-around g-brd-gray-light-v2">\
                <h3 class="g-font-size-16 g-color-gray-dark-v2 g-mb-5">{{fi-name}}</h3>\
                <p class="g-font-size-12 g-color-gray-light-v2 g-mb-5">{{fi-size2}}</p>\
                <div class="g-mb-10">{{fi-image}}</div>\
                <div class="text-left">{{fi-progressBar}}</div>\
              </div>\
             </div>',
      itemAppend: '<div class="js-result-list__item col-md-3">\
                    <div class="g-pa-10 g-brd-around g-brd-gray-light-v2">\
                      <h3 class="g-font-size-16 g-color-gray-dark-v2 g-mb-5">{{fi-name}}</h3>\
                      <p class="g-font-size-12 g-color-gray-light-v2 g-mb-5">{{fi-size2}}</p>\
                      <div class="g-mb-10">{{fi-image}}</div>\
                      <div class="text-left">{{fi-progressBar}}</div>\
                      <div>{{fi-icon}}</div>\
                      <div><i class="js-result-list-item-remove fa fa-close"></i></div>\
                    </div>\
                   </div>',
      progressBar: '<progress class="u-progress-bar-v1"></progress>',
      selectors: {
        list: '.js-result-list',
        item: '.js-result-list__item',
        progressBar: '.u-progress-bar-v1',
        remove: '.js-result-list-item-remove'
      }
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of File attachment wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initFileAttachment();

      return this.pageCollection;

    },

    initFileAttachment: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el);

        $this.filer({
          changeInput: config.input,
          showThumbs: true,
          templates: {
            box: config.box,
            item: config.item,
            itemAppend: config.itemAppend,
            progressBar: config.progressBar,
            _selectors: config.selectors,
            itemAppendToEnd: false,
            removeConfirmation: true
          },
          dragDrop: {},
          uploadFile: {
            url: '../../../assets/include/php/file-upload/upload.php',
            data: {},
            type: 'POST',
            enctype: 'multipart/form-data',
            beforeSend: function () {
            },
            success: function (data, el) {
              var parent = el.find(".u-progress-bar-v1").parent();
              el.find(".u-progress-bar-v1").fadeOut("slow", function () {
                $("<div class=\"text-success g-px-10\"><i class=\"fa fa-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
              });
            },
            error: function (el) {
              var parent = el.find(".u-progress-bar-v1").parent();
              el.find(".u-progress-bar-v1").fadeOut("slow", function () {
                $("<div class=\"text-error g-px-10\"><i class=\"fa fa-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
              });
            }
          }
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);

/**
 * Flickr wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSFlickr = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      autoplay: true,
      infinite: true
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Flickr wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.flickrInit();

      return this.pageCollection;

    },

    flickrInit: function () {
      //Variables
      var $self, config, collection;
      //Variables values
      $self = this;
      config = $self.config;
      collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this;
        //Variables values
        $this = $(el);

        //Type of content
        if ($this.data('photoset-id')) {
          $self.photosetInit($this);
        } else if ($this.data('gallery-id')) {
          $self.galleryInit($this);
        } else {
          return;
        }

        //Actions
        collection = collection.add($this);
      });
    },

    photosetInit: function (el) {
      //Variables
      var $self, apiKey, userID, photosetID;
      //Variables values
      $self = this;
      apiKey = el.data('key');
      userID = el.data('user-id');
      photosetID = el.data('photoset-id');

      $.getJSON('https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=' +
          apiKey +
          '&photoset_id=' +
          photosetID +
          '&user_id=' +
          userID +
          '&format=json&nojsoncallback=1', function (data) {
        //Variables
        var elLength, i;
        //Variables values
        elLength = data.photoset.photo.length;

        for (i = 0; i < elLength; i++) {
          var item, photoURL, itemMarkup;
          item = data.photoset.photo[i];
          photoURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_b.jpg';
          itemMarkup = '<div class="col-md-2"><div class="js-block-square g-bg-size-cover g-brd-around g-brd-gray-light-v1 g-mb-20" style="background-image: url(' +
              photoURL +
              ');"></div><h4 class="text-uppercase g-font-size-14">' +
              item.title +
              '</h4></div>';
          el.append(itemMarkup);
        }
      }).done(function () {
        $self.squareBlocks('.js-block-square');

        $(window).on('resize', function () {
          $self.squareBlocks('.js-block-square');
        });
      });
    },

    galleryInit: function (el) {
      //Variables
      var $self, apiKey, galleryID;
      //Variables values
      $self = this;
      apiKey = el.data('key');
      galleryID = el.data('gallery-id');

      $.getJSON('https://api.flickr.com/services/rest/?method=flickr.galleries.getPhotos&api_key=' +
          apiKey +
          '&gallery_id=' +
          galleryID +
          '&format=json&nojsoncallback=1', function (data) {
        //Variables
        var elLength, i;
        //Variables values
        elLength = data.photos.total;

        for (i = 0; i < elLength; i++) {
          var item, photoURL, itemMarkup, photoURLFull;
          item = data.photos.photo[i];
          photoURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_b.jpg';
          photoURLFull = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_b.jpg';
          itemMarkup = '<div class="col-md-2"><a class="js-fancy-link js-block-square d-block g-bg-pos-center g-bg-size-cover g-brd-around g-brd-gray g-mb-20" href="' +
              photoURLFull +
              '" style="background-image: url(' +
              photoURL +
              ');" rel="flickr-popup" title="' +
              item.title +
              '"></a><h4 class="text-uppercase g-font-size-14">' +
              item.title +
              '</h4></div>';
          el.append(itemMarkup);
        }
      }).done(function () {
        $self.squareBlocks('.js-block-square');

        $(window).on('resize', function () {
          $self.squareBlocks('.js-block-square');
        });
      });
    },

    squareBlocks: function (selector) {
      $(selector).each(function () {
        var $item, itemWidth;
        $item = $(this);
        itemWidth = $item.width();

        $item.css('height', itemWidth);
      });
    }

  }

})(jQuery);

/**
 * Go To wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';
  $.HSCore.components.HSGoTo = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Go To wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {
      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initGoTo();

      return this.pageCollection;
    },

    initGoTo: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          $target = $this.data('target'),
          type = $this.data('type'),
          showEffect = $this.data('show-effect'),
          position = JSON.parse(el.getAttribute('data-position')),
          compensation = $($this.data('compensation')).outerHeight(),
          offsetTop = $this.data('offset-top');

        $this.addClass('animated').css({
          'display': 'inline-block',
          'position': type,
          'opacity': 0
        });

        if (type == 'fixed' || type == 'absolute') {
          $this.css(position);
        }

        $this.on('click', function (e) {
          e.preventDefault();

          $('html, body').stop().animate({
            'scrollTop': $target ? $($target).offset().top - compensation : 0
          }, 800);
        });

        if (!$this.data('offset-top') && !$this.hasClass('u-animation-was-fired')) {
          if ($this.offset().top <= $(window).height()) {
            $this.addClass('u-animation-was-fired ' + showEffect).css({
              'opacity': ''
            });
          }
        }

        $(window).on('scroll', function () {
          if ($this.data('offset-top')) {
            if ($(window).scrollTop() >= offsetTop && !$this.hasClass('u-animation-was-fired')) {
              $this.addClass('u-animation-was-fired ' + showEffect).css({
                'opacity': ''
              });
            } else if ($(window).scrollTop() <= offsetTop && $this.hasClass('u-animation-was-fired')) {
              $this.removeClass('u-animation-was-fired ' + showEffect).css({
                'opacity': 0
              });
            }
          } else {
            var thisOffsetTop = $this.offset().top;

            if (!$this.hasClass('u-animation-was-fired')) {
              if ($(window).scrollTop() >= thisOffsetTop - $(window).height()) {
                $this.addClass('u-animation-was-fired ' + showEffect).css({
                  'opacity': ''
                });
              }
            }
          }
        });

        $(window).trigger('scroll');

        //Actions
        collection = collection.add($this);
      });
    }
  };
})(jQuery);

/**
 * HSHeaderFullscreen Component.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires HSScrollBar component (hs.scrollbar.js v1.0.0)
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSHeaderFullscreen = {

    /**
     * Base configuration.
     *
     * @private
     */
    _baseConfig: {
      afterOpen: function(){},
      afterClose: function(){},
      overlayClass: 'u-header__overlay',
      sectionsContainerSelector: '.u-header__sections-container'
    },


    /**
     * Contains all initialized items on the page.
     * 
     * @private 
     */
    _pageCollection: $(),

    /**
     * Initializes collection.
     * 
     * @param {jQuery|HTMLElement} collection
     * @param {Object} config
     * @return {jQuery}
     */
    init: function( collection, config ) {
      
      var _self = this;

      if(!collection) return $();
      collection = $(collection)

      if(!collection.length) return $();

      config = config && $.isPlainObject(config) ? config : {};

      this._bindGlobalEvents();


      return collection.each(function(i,el){

        var $this = $(this),
            itemConfig = $.extend(true, {}, _self._baseConfig, config, $this.data());

        if( $this.data('HSHeaderFullscreen') ) return;

        $this.data('HSHeaderFullscreen', new HSHeaderFullscreen(
          $this,
          itemConfig,
          new HSHeaderFullscreenOverlayEffect()
        ));

        _self._pageCollection = _self._pageCollection.add($this);

      });

    },

    /**
     * Binds necessary global events.
     * 
     * @private
     */
    _bindGlobalEvents: function() {

      var _self = this;


       $(window).on('resize.HSHeaderFullscreen', function() {

        if(_self.resizeTimeOutId) clearTimeout(_self.resizeTimeOutId);

        _self.resizeTimeOutId = setTimeout(function(){

          _self._pageCollection.each(function(i,el){

            var $this = $(el),
                HSHeaderFullscreen = $this.data('HSHeaderFullscreen');

            if(!HSHeaderFullscreen) return;

            HSHeaderFullscreen.update();

          });

        }, 50);

      });

      $(document).on('keyup.HSHeaderFullscreen', function(e){

        if(e.keyCode && e.keyCode == 27) {

          _self._pageCollection.each(function(i,el){

            var $this = $(el),
                HSHeaderFullscreen = $this.data('HSHeaderFullscreen');

            if(!HSHeaderFullscreen) return;

            HSHeaderFullscreen.hide();

          });

        }

      });

    }
  };

  /**
   * HSHeaderFullscreen.
   * 
   * @param {jQuery} element
   * @param {Object} config
   * @param {Object} effect
   * @constructor
   */
  function HSHeaderFullscreen( element, config, effect ) {

    /**
     * Contains link to the current object.
     * @private 
     */
    var _self = this;

    /**
     * Contains link to the current jQuery element.
     * @public 
     */
    this.element = element;

    /**
     * Configuration object.
     * @public
     */
    this.config = config;

    /**
     * Object that describes animation of the element.
     * @public
     */
    this.effect = effect;

    /**
     * Contains link to the overlay element.
     * @public 
     */
    this.overlay = $('<div></div>', {
      class: _self.config.overlayClass
    });

    Object.defineProperty(this, 'isShown', {
      get: function() {
        return _self.effect.isShown();
      }
    });

    Object.defineProperty(this, 'sections', {
      get: function() {
        return _self.element.find(_self.config.sectionsContainerSelector);
      }
    });

    this.element.append( this.overlay );
    this.effect.init( this.element, this.overlay, this.config.afterOpen, this.config.afterClose );
    this._bindEvents();

    if($.HSCore.components.HSScrollBar && this.sections.length) {

      $.HSCore.components.HSScrollBar.init( this.sections );
      
    }
  };

  /**
   * Binds necessary events.
   *
   * @public
   * @return {HSHeaderFullscreen}
   */
  HSHeaderFullscreen.prototype._bindEvents = function() {

    var _self = this;

    this.invoker = $('[data-target="#'+ this.element.attr('id') +'"]');

    if(this.invoker.length) {

      this.invoker.off('click.HSHeaderFullscreen').on('click.HSHeaderFullscreen', function(e){ 

        _self[ _self.isShown ? 'hide' : 'show' ]();

        e.preventDefault();

      });

    }

    return this;

  };

  /**
   * Updates the header.
   * 
   * @public
   * @return {HSHeaderFullscreen}
   */
  HSHeaderFullscreen.prototype.update = function() {

    if(!this.effect) return false;

    this.effect.update();

    return this;
  };

  /**
   * Shows the header.
   *
   * @public
   * @return {HSHeaderFullscreen}
   */
  HSHeaderFullscreen.prototype.show = function() {

    if(!this.effect) return false;

    this.effect.show();

    return this;

  };

  /**
   * Hides the header.
   *
   * @public
   * @return {HSHeaderFullscreen}
   */
  HSHeaderFullscreen.prototype.hide = function() {

    // if(this.invoker && this.invoker.length) {
    //   var hamburgers = this.invoker.find('.is-active');
    //   if(hamburgers.length) hamburgers.removeClass('is-active');
    // }

    if(!this.effect) return false;

    this.effect.hide();

    return this;

  };

  /**
   * HSHeaderFullscreenOverlayEffect.
   *
   * @constructor
   */
  function HSHeaderFullscreenOverlayEffect() {
    this._isShown = false;
  };

  /**
   * Initialization of HSHeaderFullscreenOverlayEffect.
   * 
   * @param {jQuery} element
   * @param {jQuery} overlay
   * @param {Function} afterOpen
   * @param {Function} afterClose
   * @public
   * @return {HSHeaderFullscreenOverlayEffect}
   */
  HSHeaderFullscreenOverlayEffect.prototype.init = function(element, overlay, afterOpen, afterClose) {

    var _self = this;

    this.element = element;
    this.overlay = overlay;
    this.afterOpen = afterOpen;
    this.afterClose = afterClose;

    this.overlay.on("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(e){

      if(_self.isShown() && e.originalEvent.propertyName == 'transform') {
        _self.afterOpen.call(_self.element, _self.overlay);
      }
      else if(!_self.isShown() && e.originalEvent.propertyName == 'transform') {
        _self.afterClose.call(_self.element, _self.overlay); 
      }

      e.stopPropagation();
      e.preventDefault();

    });

    this.update();

    this.overlay.addClass( this.element.data('overlay-classes') );

    return this;
  };

  /**
   * Detroys the overlay effect.
   * 
   * @public
   * @return {HSHeaderFullscreenOverlayEffect}
   */
  HSHeaderFullscreenOverlayEffect.prototype.destroy = function() {

    this.overlay.css({
      'width': 'auto',
      'height': 'auto',
    });

    this.element.removeClass('u-header--fullscreen-showed');

    return this;
  };

  /**
   * Necessary updates which will be applied when window has been resized.
   * 
   * @public
   * @return {HSHeaderFullscreenOverlayEffect}
   */
  HSHeaderFullscreenOverlayEffect.prototype.update = function() {

    var $w = $(window),
        $wW = $w.width(),
        $wH = $w.height();

    this.overlay.css({
      width: $wW > $wH ? $wW * 1.5 : $wH * 1.5,
      height: $wW > $wH ? $wW * 1.5 : $wH * 1.5
    });

    return this;
  };

  /**
   * Describes appear of the overlay.
   * 
   * @public
   * @return {HSHeaderFullscreenOverlayEffect}
   */
  HSHeaderFullscreenOverlayEffect.prototype.show = function() {

    this.element.addClass('u-header--fullscreen-showed');
    this._isShown = true;

    return this;
  };

  /**
   * Describes disappearance of the overlay.
   * 
   * @public
   * @return {HSHeaderFullscreenOverlayEffect}
   */
  HSHeaderFullscreenOverlayEffect.prototype.hide = function() {

    this.element.removeClass('u-header--fullscreen-showed');
    this._isShown = false;

    return this;
  };

  /**
   * Returns true if header has been opened, otherwise returns false.
   * 
   * @public
   * @return {Boolean}
   */
  HSHeaderFullscreenOverlayEffect.prototype.isShown = function() {

    return this._isShown;
  };

})(jQuery);
/**
 * HSHeaderSide Component.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires HSScrollBar component (hs.scrollbar.js v1.0.0), jQuery(v2.0.0)
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSHeaderSide = {

    /**
     * Base configuration.
     *
     * @private
     */
    _baseConfig: {
      headerBreakpoint: null,
      breakpointsMap: {
        'md': 768,
        'sm': 576,
        'lg': 992,
        'xl': 1200
      },
      afterOpen: function(){},
      afterClose: function(){}
    },

    /**
     * Contains collection of all initialized items on the page.
     * 
     * @private
     */
    _pageCollection: $(),

    /**
     * Initializtion of the component.
     * 
     * @param {jQuery} collection
     * @param {Object} config
     *
     * @public
     * @returns {jQuery}
     */
    init: function(collection, config) {

      var _self = this;

      if(!collection || !collection.length) return $();

      this.$w = $(window);

      config = config && $.isPlainObject(config) ? config : {};

      this._bindGlobalEvents();

      return collection.each(function(i, el){

        var $this = $(el),
            itemConfig = $.extend(true, {}, _self._baseConfig, config, $this.data());

        if( $this.data('HSHeaderSide') ) return;

        $this.data('HSHeaderSide', _self._factoryMethod( $this, itemConfig ) );

        _self._pageCollection = _self._pageCollection.add($this);

      });

    },

    /**
     * Binds necessary global events.
     * 
     * @private 
     */
    _bindGlobalEvents: function() {

      var _self = this;

      this.$w.on('resize.HSHeaderSide', function(e){

        if(_self.resizeTimeoutId) clearTimeout(_self.resizeTimeoutId);

        _self.resizeTimeoutId = setTimeout(function(){

          _self._pageCollection.each(function(i, el){

            var HSHeaderSide = $(el).data('HSHeaderSide');

            if(!HSHeaderSide.config.headerBreakpoint) return;

            if(_self.$w.width() < HSHeaderSide.config.breakpointsMap[HSHeaderSide.config.headerBreakpoint] && HSHeaderSide.isInit()) {
              HSHeaderSide.destroy();
            }
            else if(_self.$w.width() >= HSHeaderSide.config.breakpointsMap[HSHeaderSide.config.headerBreakpoint] && !HSHeaderSide.isInit()) {
              HSHeaderSide.init();
            }

          });

        }, 10);

      });

      $(document).on('keyup.HSHeaderSide', function(e){

        if(e.keyCode && e.keyCode === 27) {

          _self._pageCollection.each(function(i,el){

            var HSHeaderSide = $(el).data('HSHeaderSide'),
                hamburgers = HSHeaderSide.invoker;

            if(!HSHeaderSide) return;
            if(hamburgers.length && hamburgers.find('.is-active').length) hamburgers.find('.is-active').removeClass('is-active');
            HSHeaderSide.hide();

          });

        }

      });

    },

    /**
     * Returns an object which would be describe the Header behavior.
     * 
     * @private 
     * @returns {HSHeaderSide*} 
     */
    _factoryMethod: function(element, config) {

      // static
      if( !config.headerBehavior ) {
        return new (config['headerPosition'] == "left" ? HSHeaderSideStaticLeft : HSHeaderSideStaticRight)(element, config);
      }
      
      // overlay
      if( config.headerBehavior && config.headerBehavior == 'overlay' ) {
        return new (config['headerPosition'] == "left" ? HSHeaderSideOverlayLeft : HSHeaderSideOverlayRight)(element, config); 
      }

      // push
      if( config.headerBehavior && config.headerBehavior == 'push' ) {
        return new (config['headerPosition'] == "left" ? HSHeaderSidePushLeft : HSHeaderSidePushRight)(element, config); 
      }

    }

  }

  /**
   * Provides an abstract interface for the side header.
   * 
   * @param {jQuery} element
   * @param {Object} config
   * 
   */
  function _HSHeaderSideAbstract(element, config) {

    /**
     * Contains link to the current element.
     * 
     * @public
     */
    this.element = element;

    /**
     * Contains configuration object.
     * 
     * @public
     */
    this.config = config;


    /**
     * Contains link to the window object.
     * 
     * @public
     */
    this.$w = $(window);

    /**
     * Contains name of methods which should be implemented in derived class. 
     * Each of these methods except 'isInit' must return link to the current object.
     * 
     * @private
     */
    this._abstractMethods = ['init', 'destroy', 'show', 'hide', 'isInit'];


    /**
     * Runs initialization of the object.
     * 
     * @private 
     */
    this._build = function() {

      if( !this.config.headerBreakpoint ) return this.init();

      if( this.config.breakpointsMap[ this.config.headerBreakpoint ] <= this.$w.width() ) {
        return this.init();
      }
      else {
        return this.destroy();
      }
    };


    /**
     * Checks whether derived class implements necessary abstract events.
     * 
     * @private 
     */
    this._isCorrectDerrivedClass = function() {

      var _self = this;

      this._abstractMethods.forEach(function(method){

        if(!(method in _self) || !$.isFunction(_self[method])) {

          throw new Error("HSHeaderSide: Derived class must implement " + method + " method.");

        }

      });

      this._build();

    };

    setTimeout(this._isCorrectDerrivedClass.bind(this), 10);

  };

  /**
   * HSHeaderSide constructor function.
   * 
   * @extends _HSHeaderSideAbstract
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSHeaderSideStaticLeft( element, config ) {

    _HSHeaderSideAbstract.call(this, element, config);

    Object.defineProperty(this, 'scrollContainer', {
      get: function() {
        return this.element.find('.u-header__sections-container');
      }
    });

    this.body = $('body');

  };


  /**
   * Initialization of the HSHeaderSideStaticLeft instance.
   * 
   * @public
   * @returns {HSHeaderSideStaticLeft}
   */
  HSHeaderSideStaticLeft.prototype.init = function() {

    this.body.addClass('u-body--header-side-static-left');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.init( this.scrollContainer );
    }

    return this;

  };

  /**
   * Destroys the HSHeaderSideStaticLeft instance.
   * 
   * @public
   * @returns {HSHeaderSideStaticLeft}
   */
  HSHeaderSideStaticLeft.prototype.destroy = function() {

    this.body.removeClass('u-body--header-side-static-left');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.destroy( this.scrollContainer );
    }

    return this;

  };

  /**
   * Checks whether instance has been initialized.
   * 
   * @public
   * @returns {Boolean}
   */
  HSHeaderSideStaticLeft.prototype.isInit = function() {

    return this.body.hasClass('u-body--header-side-static-left');

  };

  /**
   * Shows the Header.
   * 
   * @public
   * @returns {HSHeaderSideStaticLeft}
   */
  HSHeaderSideStaticLeft.prototype.show = function() {
    return this;
  };

  /**
   * Hides the Header.
   * 
   * @public
   * @returns {HSHeaderSideStaticLeft}
   */
  HSHeaderSideStaticLeft.prototype.hide = function() {
    return this;
  };

  /**
   * HSHeaderSide constructor function.
   * 
   * @extends _HSHeaderSideAbstract
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSHeaderSideStaticRight( element, config ) {

    _HSHeaderSideAbstract.call(this, element, config);

    Object.defineProperty(this, 'scrollContainer', {
      get: function() {
        return this.element.find('.u-header__sections-container');
      }
    });

    this.body = $('body');

  };


  /**
   * Initialization of the HSHeaderSideStaticRight instance.
   * 
   * @public
   * @returns {HSHeaderSideStaticRight}
   */
  HSHeaderSideStaticRight.prototype.init = function() {

    this.body.addClass('u-body--header-side-static-right');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.init( this.scrollContainer );
    }

    return this;

  };

  /**
   * Destroys the HSHeaderSideStaticRight instance.
   * 
   * @public
   * @returns {HSHeaderSideStaticRight}
   */
  HSHeaderSideStaticRight.prototype.destroy = function() {

    this.body.removeClass('u-body--header-side-static-right');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.destroy( this.scrollContainer );
    }

    return this;

  };

  /**
   * Checks whether instance has been initialized.
   * 
   * @public
   * @returns {Boolean}
   */
  HSHeaderSideStaticRight.prototype.isInit = function() {

    return this.body.hasClass('u-body--header-side-static-right');

  };

  /**
   * Shows the Header.
   * 
   * @public
   * @returns {HSHeaderSideStaticRight}
   */
  HSHeaderSideStaticRight.prototype.show = function() {
    return this;
  };

  /**
   * Hides the Header.
   * 
   * @public
   * @returns {HSHeaderSideStaticRight}
   */
  HSHeaderSideStaticRight.prototype.hide = function() {
    return this;
  };

  /**
   * HSHeaderSide constructor function.
   * 
   * @extends _HSHeaderSideAbstract
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSHeaderSideOverlayLeft( element, config ) {

    _HSHeaderSideAbstract.call(this, element, config);

    Object.defineProperty(this, 'scrollContainer', {
      get: function() {
        return this.element.find('.u-header__sections-container');
      }
    });

    Object.defineProperty(this, 'isShown', {
      get: function() {
        return this.body.hasClass('u-body--header-side-opened');
      }
    });

    Object.defineProperty(this, 'overlayClasses', {
      get: function() {
        return this.element.data('header-overlay-classes') ? this.element.data('header-overlay-classes') : '';
      }
    });

    Object.defineProperty(this, 'headerClasses', {
      get: function() {
        return this.element.data('header-classes') ? this.element.data('header-classes') : '';
      }
    });

    this.body = $('body');
    this.invoker = $('[data-target="#'+this.element.attr('id')+'"]');

  };


  /**
   * Initialization of the HSHeaderSideOverlayLeft instance.
   * 
   * @public
   * @returns {HSHeaderSideOverlayLeft}
   */
  HSHeaderSideOverlayLeft.prototype.init = function() {

    var _self = this;

    this.body.addClass('u-body--header-side-overlay-left');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.init( this.scrollContainer );
    }

    if(this.invoker.length) {
      this.invoker.on('click.HSHeaderSide', function(e){

        if(_self.isShown) {
          _self.hide();
        }
        else {
          _self.show();
        }

        e.preventDefault();
      }).css('display', 'block');
    }

    if(!this.overlay) {

      this.overlay = $('<div></div>', {
        class: 'u-header__overlay ' + _self.overlayClasses
      });

    }

    this.overlay.on('click.HSHeaderSide', function(e){
      var hamburgers = _self.invoker.length ? _self.invoker.find('.is-active') : $();
      if(hamburgers.length) hamburgers.removeClass('is-active');
      _self.hide();
    });

    this.element.addClass(this.headerClasses).append(this.overlay);

    return this;

  };

  /**
   * Destroys the HSHeaderSideOverlayLeft instance.
   * 
   * @public
   * @returns {HSHeaderSideOverlayLeft}
   */
  HSHeaderSideOverlayLeft.prototype.destroy = function() {

    this.body.removeClass('u-body--header-side-overlay-left');
    this.hide();

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.destroy( this.scrollContainer );
    }

    this.element.removeClass(this.headerClasses);
    if(this.invoker.length) {
      this.invoker.off('click.HSHeaderSide').css('display', 'none');
    }
    if(this.overlay) {
      this.overlay.off('click.HSHeaderSide');
      this.overlay.remove();
      this.overlay = null;
    }

    return this;

  };

  /**
   * Checks whether instance has been initialized.
   * 
   * @public
   * @returns {Boolean}
   */
  HSHeaderSideOverlayLeft.prototype.isInit = function() {

    return this.body.hasClass('u-body--header-side-overlay-left');

  };

  /**
   * Shows the Header.
   * 
   * @public
   * @returns {HSHeaderSideOverlayLeft}
   */
  HSHeaderSideOverlayLeft.prototype.show = function() {

    this.body.addClass('u-body--header-side-opened');

    return this;
  };

  /**
   * Hides the Header.
   * 
   * @public
   * @returns {HSHeaderSideOverlayLeft}
   */
  HSHeaderSideOverlayLeft.prototype.hide = function() {

    // var hamburgers = this.invoker.length ? this.invoker.find('.is-active') : $();
    // if(hamburgers.length) hamburgers.removeClass('is-active');

    this.body.removeClass('u-body--header-side-opened');

    return this;
  };

  /**
   * HSHeaderSide constructor function.
   * 
   * @extends _HSHeaderSideAbstract
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSHeaderSidePushLeft( element, config ) {

    _HSHeaderSideAbstract.call(this, element, config);

    Object.defineProperty(this, 'scrollContainer', {
      get: function() {
        return this.element.find('.u-header__sections-container');
      }
    });

    Object.defineProperty(this, 'isShown', {
      get: function() {
        return this.body.hasClass('u-body--header-side-opened');
      }
    });

    Object.defineProperty(this, 'overlayClasses', {
      get: function() {
        return this.element.data('header-overlay-classes') ? this.element.data('header-overlay-classes') : '';
      }
    });

    Object.defineProperty(this, 'headerClasses', {
      get: function() {
        return this.element.data('header-classes') ? this.element.data('header-classes') : '';
      }
    });

    Object.defineProperty(this, 'bodyClasses', {
      get: function() {
        return this.element.data('header-body-classes') ? this.element.data('header-body-classes') : '';
      }
    });

    this.body = $('body');
    this.invoker = $('[data-target="#'+this.element.attr('id')+'"]');

  };


  /**
   * Initialization of the HSHeaderSidePushLeft instance.
   * 
   * @public
   * @returns {HSHeaderSidePushLeft}
   */
  HSHeaderSidePushLeft.prototype.init = function() {

    var _self = this;

    this.body.addClass('u-body--header-side-push-left');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.init( this.scrollContainer );
    }

    if(this.invoker.length) {
      this.invoker.on('click.HSHeaderSide', function(e){

        if(_self.isShown) {
          _self.hide();
        }
        else {
          _self.show();
        }

        e.preventDefault();
      }).css('display', 'block');
    }

    if(!this.overlay) {

      this.overlay = $('<div></div>', {
        class: 'u-header__overlay ' + _self.overlayClasses
      });

    }

    this.overlay.on('click.HSHeaderSide', function(e){
      var hamburgers = _self.invoker.length ? _self.invoker.find('.is-active') : $();
      if(hamburgers.length) hamburgers.removeClass('is-active');
      _self.hide();
    });

    this.element.addClass(this.headerClasses).append(this.overlay);
    this.body.addClass(this.bodyClasses);

    return this;

  };

  /**
   * Destroys the HSHeaderSidePushLeft instance.
   * 
   * @public
   * @returns {HSHeaderSidePushLeft}
   */
  HSHeaderSidePushLeft.prototype.destroy = function() {

    this.body.removeClass('u-body--header-side-push-left');
    this.hide();

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.destroy( this.scrollContainer );
    }

    this.element.removeClass(this.headerClasses);
    this.body.removeClass(this.bodyClasses);
    if(this.invoker.length){
      this.invoker.off('click.HSHeaderSide').css('display', 'none');
    }
    if(this.overlay) {
      this.overlay.off('click.HSHeaderSide');
      this.overlay.remove();
      this.overlay = null;
    }

    return this;

  };

  /**
   * Checks whether instance has been initialized.
   * 
   * @public
   * @returns {Boolean}
   */
  HSHeaderSidePushLeft.prototype.isInit = function() {

    return this.body.hasClass('u-body--header-side-push-left');

  };

  /**
   * Shows the Header.
   * 
   * @public
   * @returns {HSHeaderSidePushLeft}
   */
  HSHeaderSidePushLeft.prototype.show = function() {

    this.body.addClass('u-body--header-side-opened');

    return this;
  };

  /**
   * Hides the Header.
   * 
   * @public
   * @returns {HSHeaderSidePushLeft}
   */
  HSHeaderSidePushLeft.prototype.hide = function() {

    this.body.removeClass('u-body--header-side-opened');

    return this;
  };

  /**
   * HSHeaderSide constructor function.
   * 
   * @extends _HSHeaderSideAbstract
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSHeaderSideOverlayRight( element, config ) {

    _HSHeaderSideAbstract.call(this, element, config);

    Object.defineProperty(this, 'scrollContainer', {
      get: function() {
        return this.element.find('.u-header__sections-container');
      }
    });

    Object.defineProperty(this, 'isShown', {
      get: function() {
        return this.body.hasClass('u-body--header-side-opened');
      }
    });

    Object.defineProperty(this, 'overlayClasses', {
      get: function() {
        return this.element.data('header-overlay-classes') ? this.element.data('header-overlay-classes') : '';
      }
    });

    Object.defineProperty(this, 'headerClasses', {
      get: function() {
        return this.element.data('header-classes') ? this.element.data('header-classes') : '';
      }
    });

    this.body = $('body');
    this.invoker = $('[data-target="#'+this.element.attr('id')+'"]');

  };


  /**
   * Initialization of the HSHeaderSideOverlayRight instance.
   * 
   * @public
   * @returns {HSHeaderSideOverlayRight}
   */
  HSHeaderSideOverlayRight.prototype.init = function() {

    var _self = this;

    this.body.addClass('u-body--header-side-overlay-right');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.init( this.scrollContainer );
    }

    if(this.invoker.length) {
      this.invoker.on('click.HSHeaderSide', function(e){

        if(_self.isShown) {
          _self.hide();
        }
        else {
          _self.show();
        }

        e.preventDefault();
      }).css('display', 'block');
    }

    if(!this.overlay) {

      this.overlay = $('<div></div>', {
        class: 'u-header__overlay ' + _self.overlayClasses
      });

    }

    this.overlay.on('click.HSHeaderSide', function(e){
      var hamburgers = _self.invoker.length ? _self.invoker.find('.is-active') : $();
      if(hamburgers.length) hamburgers.removeClass('is-active');
      _self.hide();
    });

    this.element.addClass(this.headerClasses).append(this.overlay);

    return this;

  };

  /**
   * Destroys the HSHeaderSideOverlayRight instance.
   * 
   * @public
   * @returns {HSHeaderSideOverlayRight}
   */
  HSHeaderSideOverlayRight.prototype.destroy = function() {

    this.body.removeClass('u-body--header-side-overlay-right');
    this.hide();

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.destroy( this.scrollContainer );
    }

    this.element.removeClass(this.headerClasses);
    if(this.invoker.length) {
      this.invoker.off('click.HSHeaderSide').css('display', 'none');
    }
    if(this.overlay) {
      this.overlay.off('click.HSHeaderSide');
      this.overlay.remove();
      this.overlay = null;
    }

    return this;

  };

  /**
   * Checks whether instance has been initialized.
   * 
   * @public
   * @returns {Boolean}
   */
  HSHeaderSideOverlayRight.prototype.isInit = function() {

    return this.body.hasClass('u-body--header-side-overlay-right');

  };

  /**
   * Shows the Header.
   * 
   * @public
   * @returns {HSHeaderSideOverlayRight}
   */
  HSHeaderSideOverlayRight.prototype.show = function() {

    this.body.addClass('u-body--header-side-opened');

    return this;
  };

  /**
   * Hides the Header.
   * 
   * @public
   * @returns {HSHeaderSideOverlayRight}
   */
  HSHeaderSideOverlayRight.prototype.hide = function() {

    // var hamburgers = this.invoker.length ? this.invoker.find('.is-active') : $();
    // if(hamburgers.length) hamburgers.removeClass('is-active');

    this.body.removeClass('u-body--header-side-opened');

    return this;
  };

  /**
   * HSHeaderSide constructor function.
   * 
   * @extends _HSHeaderSideAbstract
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSHeaderSidePushRight( element, config ) {

    _HSHeaderSideAbstract.call(this, element, config);

    Object.defineProperty(this, 'scrollContainer', {
      get: function() {
        return this.element.find('.u-header__sections-container');
      }
    });

    Object.defineProperty(this, 'isShown', {
      get: function() {
        return this.body.hasClass('u-body--header-side-opened');
      }
    });

    Object.defineProperty(this, 'overlayClasses', {
      get: function() {
        return this.element.data('header-overlay-classes') ? this.element.data('header-overlay-classes') : '';
      }
    });

    Object.defineProperty(this, 'headerClasses', {
      get: function() {
        return this.element.data('header-classes') ? this.element.data('header-classes') : '';
      }
    });

    Object.defineProperty(this, 'bodyClasses', {
      get: function() {
        return this.element.data('header-body-classes') ? this.element.data('header-body-classes') : '';
      }
    });

    this.body = $('body');
    this.invoker = $('[data-target="#'+this.element.attr('id')+'"]');

  };


  /**
   * Initialization of the HSHeaderSidePushRight instance.
   * 
   * @public
   * @returns {HSHeaderSidePushRight}
   */
  HSHeaderSidePushRight.prototype.init = function() {

    var _self = this;

    this.body.addClass('u-body--header-side-push-right');

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.init( this.scrollContainer );
    }

    if(this.invoker.length) {
      this.invoker.on('click.HSHeaderSide', function(e){

        if(_self.isShown) {
          _self.hide();
        }
        else {
          _self.show();
        }

        e.preventDefault();
      }).css('display', 'block');
    }

    if(!this.overlay) {

      this.overlay = $('<div></div>', {
        class: 'u-header__overlay ' + _self.overlayClasses
      });

    }

    this.overlay.on('click.HSHeaderSide', function(e){
      var hamburgers = _self.invoker.length ? _self.invoker.find('.is-active') : $();
      if(hamburgers.length) hamburgers.removeClass('is-active');
      _self.hide();
    });

    this.element.addClass(this.headerClasses).append(this.overlay);
    this.body.addClass(this.bodyClasses);

    return this;

  };

  /**
   * Destroys the HSHeaderSidePushRight instance.
   * 
   * @public
   * @returns {HSHeaderSidePushRight}
   */
  HSHeaderSidePushRight.prototype.destroy = function() {

    this.body.removeClass('u-body--header-side-push-right');
    this.hide();

    if( $.HSCore.components.HSScrollBar && this.scrollContainer.length ) {
      $.HSCore.components.HSScrollBar.destroy( this.scrollContainer );
    }

    this.element.removeClass(this.headerClasses);
    this.body.removeClass(this.bodyClasses);
    if(this.invoker.length){
      this.invoker.off('click.HSHeaderSide').css('display', 'none');
    }
    if(this.overlay) {
      this.overlay.off('click.HSHeaderSide');
      this.overlay.remove();
      this.overlay = null;
    }

    return this;

  };

  /**
   * Checks whether instance has been initialized.
   * 
   * @public
   * @returns {Boolean}
   */
  HSHeaderSidePushRight.prototype.isInit = function() {

    return this.body.hasClass('u-body--header-side-push-right');

  };

  /**
   * Shows the Header.
   * 
   * @public
   * @returns {HSHeaderSidePushRight}
   */
  HSHeaderSidePushRight.prototype.show = function() {

    this.body.addClass('u-body--header-side-opened');

    return this;
  };

  /**
   * Hides the Header.
   * 
   * @public
   * @returns {HSHeaderSidePushRight}
   */
  HSHeaderSidePushRight.prototype.hide = function() {

    // var hamburgers = this.invoker.length ? this.invoker.find('.is-active') : $();
    // if(hamburgers.length) hamburgers.removeClass('is-active');

    this.body.removeClass('u-body--header-side-opened');

    return this;
  };

})(jQuery);
/**
 * Header Component.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSHeader = {

    /**
     * Base configuration.
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      headerFixMoment: 0,
      headerFixEffect: 'slide',
      breakpointsMap: {
        'md': 768,
        'sm': 576,
        'lg': 992,
        'xl': 1200
      }
    },

    /**
     * Initializtion of header.
     *
     * @param jQuery element
     *
     * @return jQuery
     */
    init: function( element ) {

      if( !element || element.length !== 1 || element.data('HSHeader')) return;

      var self = this;

      this.element = element;
      this.config = $.extend(true, {}, this._baseConfig, element.data());

      this.observers = this._detectObservers();
      this.fixMediaDifference( this.element );
      this.element.data('HSHeader', new HSHeader(this.element, this.config, this.observers ) );

      $(window)
        .on('scroll.uHeader', function(e){

          element
            .data('HSHeader')
            .notify();

        })
        .on('resize.uHeader', function(e){

          if( self.resizeTimeOutId ) clearTimeout( self.resizeTimeOutId );

          self.resizeTimeOutId = setTimeout( function(){

            element
              .data('HSHeader')
              .checkViewport()
              .update();

          }, 100 );

        })
        .trigger('scroll.uHeader');

      return this.element;

    },

    /**
     *
     *
     * @param
     *
     * @return
     */
    _detectObservers: function() {

      if(!this.element || !this.element.length) return;

      var observers = {
        'xs': [],
        'sm': [],
        'md': [],
        'lg': [],
        'xl': []
      };

      /* ------------------------ xs -------------------------*/

        // Has Hidden Element
        if( this.element.hasClass('u-header--has-hidden-element') ) {
          observers['xs'].push(
            new HSHeaderHasHiddenElement( this.element )
          );
        }

        // Sticky top

        if( this.element.hasClass('u-header--sticky-top') ) {

          if( this.element.hasClass('u-header--show-hide') ) {

            observers['xs'].push(
              new HSHeaderMomentShowHideObserver( this.element )
            );

          }
          else if( this.element.hasClass('u-header--toggle-section') ) {

            observers['xs'].push(
              new HSHeaderHideSectionObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo') ) {

            observers['xs'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance') ) {

            observers['xs'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Floating

        if( this.element.hasClass('u-header--floating') ) {

          observers['xs'].push(
            new HSHeaderFloatingObserver( this.element )
          );

        }

        if( this.element.hasClass('u-header--invulnerable') ) {
          observers['xs'].push(
            new HSHeaderWithoutBehaviorObserver( this.element )
          );
        }

        // Sticky bottom

        if( this.element.hasClass('u-header--sticky-bottom') ) {

          if(this.element.hasClass('u-header--change-appearance')) {
            observers['xs'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );
          }

          if( this.element.hasClass('u-header--change-logo') ) {

            observers['xs'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

        }

        // Abs top & Static

        if( this.element.hasClass('u-header--abs-top') || this.element.hasClass('u-header--static')) {

          if( this.element.hasClass('u-header--show-hide') ) {

            observers['xs'].push(
              new HSHeaderShowHideObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo') ) {

            observers['xs'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance') ) {

            observers['xs'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Abs bottom & Abs top 2nd screen

        if( this.element.hasClass('u-header--abs-bottom') || this.element.hasClass('u-header--abs-top-2nd-screen') ) {

          observers['xs'].push(
            new HSHeaderStickObserver( this.element )
          );

          if( this.element.hasClass('u-header--change-appearance') ) {

            observers['xs'].push(
              new HSHeaderChangeAppearanceObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

          if( this.element.hasClass('u-header--change-logo') ) {

            observers['xs'].push(
              new HSHeaderChangeLogoObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

        }

      /* ------------------------ sm -------------------------*/

        // Sticky top

        // Has Hidden Element
        if( this.element.hasClass('u-header--has-hidden-element--sm') ) {
          observers['sm'].push(
            new HSHeaderHasHiddenElement( this.element )
          );
        }

        if( this.element.hasClass('u-header--sticky-top--sm') ) {

          if( this.element.hasClass('u-header--show-hide--sm') ) {

            observers['sm'].push(
              new HSHeaderMomentShowHideObserver( this.element )
            );

          }
          else if( this.element.hasClass('u-header--toggle-section--sm') ) {

            observers['sm'].push(
              new HSHeaderHideSectionObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--sm') ) {

            observers['sm'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--sm') ) {

            observers['sm'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Floating

        if( this.element.hasClass('u-header--floating--sm') ) {

          observers['sm'].push(
            new HSHeaderFloatingObserver( this.element )
          );

        }

        if( this.element.hasClass('u-header--invulnerable--sm') ) {
          observers['sm'].push(
            new HSHeaderWithoutBehaviorObserver( this.element )
          );
        }

        // Sticky bottom

        if( this.element.hasClass('u-header--sticky-bottom--sm') ) {

          if(this.element.hasClass('u-header--change-appearance--sm')) {
            observers['sm'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );
          }

          if( this.element.hasClass('u-header--change-logo--sm') ) {

            observers['sm'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

        }

        // Abs top & Static

        if( this.element.hasClass('u-header--abs-top--sm') || this.element.hasClass('u-header--static--sm')) {

          if( this.element.hasClass('u-header--show-hide--sm') ) {

            observers['sm'].push(
              new HSHeaderShowHideObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--sm') ) {

            observers['sm'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--sm') ) {

            observers['sm'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Abs bottom & Abs top 2nd screen

        if( this.element.hasClass('u-header--abs-bottom--sm') || this.element.hasClass('u-header--abs-top-2nd-screen--sm') ) {

          observers['sm'].push(
            new HSHeaderStickObserver( this.element )
          );

          if( this.element.hasClass('u-header--change-appearance--sm') ) {

            observers['sm'].push(
              new HSHeaderChangeAppearanceObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

          if( this.element.hasClass('u-header--change-logo--sm') ) {

            observers['sm'].push(
              new HSHeaderChangeLogoObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

        }

      /* ------------------------ md -------------------------*/

        // Has Hidden Element
        if( this.element.hasClass('u-header--has-hidden-element--md') ) {
          observers['md'].push(
            new HSHeaderHasHiddenElement( this.element )
          );
        }

        // Sticky top

        if( this.element.hasClass('u-header--sticky-top--md') ) {

          if( this.element.hasClass('u-header--show-hide--md') ) {

            observers['md'].push(
              new HSHeaderMomentShowHideObserver( this.element )
            );

          }
          else if( this.element.hasClass('u-header--toggle-section--md') ) {

            observers['md'].push(
              new HSHeaderHideSectionObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--md') ) {

            observers['md'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--md') ) {

            observers['md'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Floating

        if( this.element.hasClass('u-header--floating--md') ) {

          observers['md'].push(
            new HSHeaderFloatingObserver( this.element )
          );

        }

        if( this.element.hasClass('u-header--invulnerable--md') ) {
          observers['md'].push(
            new HSHeaderWithoutBehaviorObserver( this.element )
          );
        }

        // Sticky bottom

        if( this.element.hasClass('u-header--sticky-bottom--md') ) {

          if(this.element.hasClass('u-header--change-appearance--md')) {
            observers['md'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );
          }

          if( this.element.hasClass('u-header--change-logo--md') ) {

            observers['md'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

        }

        // Abs top & Static

        if( this.element.hasClass('u-header--abs-top--md') || this.element.hasClass('u-header--static--md')) {

          if( this.element.hasClass('u-header--show-hide--md') ) {

            observers['md'].push(
              new HSHeaderShowHideObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--md') ) {

            observers['md'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--md') ) {

            observers['md'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Abs bottom & Abs top 2nd screen

        if( this.element.hasClass('u-header--abs-bottom--md') || this.element.hasClass('u-header--abs-top-2nd-screen--md') ) {

          observers['md'].push(
            new HSHeaderStickObserver( this.element )
          );

          if( this.element.hasClass('u-header--change-appearance--md') ) {

            observers['md'].push(
              new HSHeaderChangeAppearanceObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

          if( this.element.hasClass('u-header--change-logo--md') ) {

            observers['md'].push(
              new HSHeaderChangeLogoObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

        }


      /* ------------------------ lg -------------------------*/

        // Has Hidden Element
        if( this.element.hasClass('u-header--has-hidden-element--lg') ) {
          observers['lg'].push(
            new HSHeaderHasHiddenElement( this.element )
          );
        }

        // Sticky top

        if( this.element.hasClass('u-header--sticky-top--lg') ) {

          if( this.element.hasClass('u-header--show-hide--lg') ) {

            observers['lg'].push(
              new HSHeaderMomentShowHideObserver( this.element )
            );

          }
          else if( this.element.hasClass('u-header--toggle-section--lg') ) {

            observers['lg'].push(
              new HSHeaderHideSectionObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--lg') ) {

            observers['lg'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--lg') ) {

            observers['lg'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Floating

        if( this.element.hasClass('u-header--floating--lg') ) {

          observers['lg'].push(
            new HSHeaderFloatingObserver( this.element )
          );

        }

        if( this.element.hasClass('u-header--invulnerable--lg') ) {
          observers['lg'].push(
            new HSHeaderWithoutBehaviorObserver( this.element )
          );
        }

        // Sticky bottom

        if( this.element.hasClass('u-header--sticky-bottom--lg') ) {

          if(this.element.hasClass('u-header--change-appearance--lg')) {
            observers['lg'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );
          }

          if( this.element.hasClass('u-header--change-logo--lg') ) {

            observers['lg'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

        }

        // Abs top & Static

        if( this.element.hasClass('u-header--abs-top--lg') || this.element.hasClass('u-header--static--lg')) {

          if( this.element.hasClass('u-header--show-hide--lg') ) {

            observers['lg'].push(
              new HSHeaderShowHideObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--lg') ) {

            observers['lg'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--lg') ) {

            observers['lg'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Abs bottom & Abs top 2nd screen

        if( this.element.hasClass('u-header--abs-bottom--lg') || this.element.hasClass('u-header--abs-top-2nd-screen--lg') ) {

          observers['lg'].push(
            new HSHeaderStickObserver( this.element )
          );

          if( this.element.hasClass('u-header--change-appearance--lg') ) {

            observers['lg'].push(
              new HSHeaderChangeAppearanceObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

          if( this.element.hasClass('u-header--change-logo--lg') ) {

            observers['lg'].push(
              new HSHeaderChangeLogoObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

        }

      /* ------------------------ xl -------------------------*/

        // Has Hidden Element
        if( this.element.hasClass('u-header--has-hidden-element--xl') ) {
          observers['xl'].push(
            new HSHeaderHasHiddenElement( this.element )
          );
        }

        // Sticky top

        if( this.element.hasClass('u-header--sticky-top--xl') ) {

          if( this.element.hasClass('u-header--show-hide--xl') ) {

            observers['xl'].push(
              new HSHeaderMomentShowHideObserver( this.element )
            );

          }
          else if( this.element.hasClass('u-header--toggle-section--xl') ) {

            observers['xl'].push(
              new HSHeaderHideSectionObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--xl') ) {

            observers['xl'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--xl') ) {

            observers['xl'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Floating

        if( this.element.hasClass('u-header--floating--xl') ) {

          observers['xl'].push(
            new HSHeaderFloatingObserver( this.element )
          );

        }

        // Sticky bottom

        if( this.element.hasClass('u-header--invulnerable--xl') ) {
          observers['xl'].push(
            new HSHeaderWithoutBehaviorObserver( this.element )
          );
        }

        // Sticky bottom

        if( this.element.hasClass('u-header--sticky-bottom--xl') ) {

          if(this.element.hasClass('u-header--change-appearance--xl')) {
            observers['xl'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );
          }

          if( this.element.hasClass('u-header--change-logo--xl') ) {

            observers['xl'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

        }

        // Abs top & Static

        if( this.element.hasClass('u-header--abs-top--xl') || this.element.hasClass('u-header--static--xl')) {

          if( this.element.hasClass('u-header--show-hide--xl') ) {

            observers['xl'].push(
              new HSHeaderShowHideObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-logo--xl') ) {

            observers['xl'].push(
              new HSHeaderChangeLogoObserver( this.element )
            );

          }

          if( this.element.hasClass('u-header--change-appearance--xl') ) {

            observers['xl'].push(
              new HSHeaderChangeAppearanceObserver( this.element )
            );

          }

        }

        // Abs bottom & Abs top 2nd screen

        if( this.element.hasClass('u-header--abs-bottom--xl') || this.element.hasClass('u-header--abs-top-2nd-screen--xl') ) {

          observers['xl'].push(
            new HSHeaderStickObserver( this.element )
          );

          if( this.element.hasClass('u-header--change-appearance--xl') ) {

            observers['xl'].push(
              new HSHeaderChangeAppearanceObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

          if( this.element.hasClass('u-header--change-logo--xl') ) {

            observers['xl'].push(
              new HSHeaderChangeLogoObserver( this.element, {
                fixPointSelf: true
              } )
            );

          }

        }


      return observers;

    },

    /**
     *
     *
     * @param
     *
     * @return
     */
    fixMediaDifference: function(element) {

      if(!element || !element.length || !element.filter('[class*="u-header--side"]').length) return;

      var toggleable;

      if(element.hasClass('u-header--side-left--xl') || element.hasClass('u-header--side-right--xl')) {

        toggleable = element.find('.navbar-toggleable-xl');

        if(toggleable.length) {
          toggleable
            .removeClass('navbar-toggleable-xl')
            .addClass('navbar-toggleable-lg');
        }

      }
      else if(element.hasClass('u-header--side-left--lg') || element.hasClass('u-header--side-right--lg')) {

        toggleable = element.find('.navbar-toggleable-lg');

        if(toggleable.length) {
          toggleable
            .removeClass('navbar-toggleable-lg')
            .addClass('navbar-toggleable-md');
        }

      }
      else if(element.hasClass('u-header--side-left--md') || element.hasClass('u-header--side-right--md')) {

        toggleable = element.find('.navbar-toggleable-md');

        if(toggleable.length) {
          toggleable
            .removeClass('navbar-toggleable-md')
            .addClass('navbar-toggleable-sm');
        }

      }
      else if(element.hasClass('u-header--side-left--sm') || element.hasClass('u-header--side-right--sm')) {

        toggleable = element.find('.navbar-toggleable-sm');

        if(toggleable.length) {
          toggleable
            .removeClass('navbar-toggleable-sm')
            .addClass('navbar-toggleable');
        }

      }

    }

  }

  /**
   * HSHeader constructor function.
   *
   * @param jQuery element
   * @param Object config
   * @param Object observers
   *
   * @return undefined
   */
  function HSHeader( element, config, observers ) {

    if( !element || !element.length ) return;

    this.element = element;
    this.config = config;

    this.observers = observers && $.isPlainObject( observers ) ? observers : {};

    this.viewport = 'xs';
    this.checkViewport();

  }

  /**
   *
   *
   * @return Object
   */
  HSHeader.prototype.checkViewport = function() {

    var $w = $(window);

    if( $w.width() > this.config.breakpointsMap['sm'] && this.observers['sm'].length ){
      this.prevViewport = this.viewport;
      this.viewport = 'sm';
      return this;
    }

    if( $w.width() > this.config.breakpointsMap['md'] && this.observers['md'].length ) {
      this.prevViewport = this.viewport;
      this.viewport = 'md';
      return this;
    }

    if( $w.width() > this.config.breakpointsMap['lg'] && this.observers['lg'].length ) {
      this.prevViewport = this.viewport;
      this.viewport = 'lg';
      return this;
    }

    if( $w.width() > this.config.breakpointsMap['xl'] && this.observers['xl'].length ) {
      this.prevViewport = this.viewport;
      this.viewport = 'xl';
      return this;
    }


    if(this.prevViewport) this.prevViewport = this.viewport;
    this.viewport = 'xs';


    return this;

  }

  /**
   * Notifies all observers.
   *
   * @return Object
   */
  HSHeader.prototype.notify = function(){

    if( this.prevViewport ) {
      this.observers[this.prevViewport].forEach(function(observer){
        observer.destroy();
      });
      this.prevViewport = null;
    }

    this.observers[this.viewport].forEach(function(observer){
      observer.check();
    });

    return this;

  }

  /**
   * Reinit all header's observers.
   *
   * @return Object
   */
  HSHeader.prototype.update = function() {

    // if( this.prevViewport ) {
    //   this.observers[this.prevViewport].forEach(function(observer){
    //     observer.destroy();
    //   });
    //   this.prevViewport = null;
    // }

    for(var viewport in this.observers) {

      this.observers[viewport].forEach(function(observer){
        observer.destroy();
      });

    }

    this.prevViewport = null;

    this.observers[this.viewport].forEach(function(observer){
      observer.reinit();
    });

    return this;

  }

  /**
   * Abstract constructor function for each observer.
   *
   * @param jQuery element
   *
   * @return Boolean|undefined
   */
  function HSAbstractObserver(element) {
    if( !element || !element.length ) return;

    this.element = element;
    this.defaultState = true;

    this.reinit = function() {

      this
        .destroy()
        .init()
        .check();
    }

    return true;
  }

  /**
   * Header's observer which is responsible for 'sticky' behavior.
   *
   * @param jQuery element
   */
  function HSHeaderStickObserver( element ) {
    if( !HSAbstractObserver.call(this, element) ) return;

    this.init();

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderStickObserver.prototype.init = function() {
    this.defaultState = true;
    this.offset = this.element.offset().top;

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderStickObserver.prototype.destroy = function() {
    this.toDefaultState();

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderStickObserver.prototype.check = function() {

    var $w = $(window),
        docScrolled = $w.scrollTop();

    if( docScrolled > this.offset && this.defaultState) {
      this.changeState();
    }
    else if(docScrolled < this.offset && !this.defaultState){
      this.toDefaultState();
    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderStickObserver.prototype.changeState = function() {

    this.element.addClass('js-header-fix-moment');
    this.defaultState = !this.defaultState;

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderStickObserver.prototype.toDefaultState = function() {

    this.element.removeClass('js-header-fix-moment');
    this.defaultState = !this.defaultState;

    return this;

  }


  /**
   * Header's observer which is responsible for 'show/hide' behavior which is depended on scroll direction.
   *
   * @param jQuery element
   */
  function HSHeaderMomentShowHideObserver( element ) {
    if( !HSAbstractObserver.call(this, element) ) return;

    this.init();
  }

  /**
   *
   *
   * @return Object
   */
  HSHeaderMomentShowHideObserver.prototype.init = function() {
    this.direction = 'down';
    this.delta = 0;
    this.defaultState = true;

    this.offset = isFinite( this.element.data('header-fix-moment') ) && this.element.data('header-fix-moment') != 0 ? this.element.data('header-fix-moment') : 5;
    this.effect = this.element.data('header-fix-effect') ? this.element.data('header-fix-effect') : 'show-hide';

    return this;
  }

  /**
   *
   *
   * @return Object
   */
  HSHeaderMomentShowHideObserver.prototype.destroy = function() {
    this.toDefaultState();

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return Object
   */
  HSHeaderMomentShowHideObserver.prototype.checkDirection = function() {

    if( $(window).scrollTop() > this.delta ) {
      this.direction = 'down';
    }
    else {
      this.direction = 'up';
    }

    this.delta = $(window).scrollTop();

    return this;

  }

  /**
   *
   *
   * @return Object
   */
  HSHeaderMomentShowHideObserver.prototype.toDefaultState = function() {

    switch( this.effect ) {
      case 'slide' :
        this.element.removeClass('u-header--moved-up');
      break;

      case 'fade' :
        this.element.removeClass('u-header--faded');
      break;

      default:
        this.element.removeClass('u-header--invisible');
    }

    this.defaultState = !this.defaultState;

    return this;
  }

  /**
   *
   *
   * @return Object
   */
  HSHeaderMomentShowHideObserver.prototype.changeState = function() {

    switch( this.effect ) {
      case 'slide' :
        this.element.addClass('u-header--moved-up');
      break;

      case 'fade' :
        this.element.addClass('u-header--faded');
      break;

      default:
        this.element.addClass('u-header--invisible');
    }

    this.defaultState = !this.defaultState;

    return this;
  }

  /**
   *
   *
   * @return Object
   */
  HSHeaderMomentShowHideObserver.prototype.check = function() {

    var docScrolled = $(window).scrollTop();
    this.checkDirection();


    if( docScrolled >= this.offset && this.defaultState && this.direction == 'down' ) {
      this.changeState();
    }
    else if ( !this.defaultState && this.direction == 'up') {
      this.toDefaultState();
    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  function HSHeaderShowHideObserver( element ) {
    if( !HSAbstractObserver.call(this, element) ) return;

    this.init();
  }

  /**
   *
   *
   * @param
   *
   * @return Object
   */
  HSHeaderShowHideObserver.prototype.init = function() {
    if(!this.defaultState && $(window).scrollTop() > this.offset) return this;

    this.defaultState = true;
    this.transitionDuration = parseFloat( getComputedStyle( this.element.get(0) )['transition-duration'], 10 ) * 1000;

    this.offset = isFinite( this.element.data('header-fix-moment') ) && this.element.data('header-fix-moment') > this.element.outerHeight() ? this.element.data('header-fix-moment') : this.element.outerHeight() + 100;
    this.effect = this.element.data('header-fix-effect') ? this.element.data('header-fix-effect') : 'show-hide';

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return Object
   */
  HSHeaderShowHideObserver.prototype.destroy = function() {
    if( !this.defaultState && $(window).scrollTop() > this.offset ) return this;

    this.element.removeClass('u-header--untransitioned');
    this._removeCap();

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderShowHideObserver.prototype._insertCap = function() {

    this.element.addClass('js-header-fix-moment u-header--untransitioned');

    if( this.element.hasClass('u-header--static') ) {

      $('html').css('padding-top', this.element.outerHeight() );

    }

    switch( this.effect ) {
      case 'fade' :
        this.element.addClass('u-header--faded');
      break;

      case 'slide' :
        this.element.addClass('u-header--moved-up');
      break;

      default :
        this.element.addClass('u-header--invisible')
    }

    this.capInserted = true;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderShowHideObserver.prototype._removeCap = function() {

    var self = this;

    this.element.removeClass('js-header-fix-moment');

    if( this.element.hasClass('u-header--static') ) {

      $('html').css('padding-top', 0 );

    }

    if(this.removeCapTimeOutId) clearTimeout(this.removeCapTimeOutId);

    this.removeCapTimeOutId = setTimeout(function() {
      self.element.removeClass('u-header--moved-up u-header--faded u-header--invisible');
    }, 10);

    this.capInserted = false;

  }


  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderShowHideObserver.prototype.check = function() {

    var $w = $(window);

    if( $w.scrollTop() > this.element.outerHeight() && !this.capInserted ) {
      this._insertCap();
    }
    else if($w.scrollTop() <= this.element.outerHeight() && this.capInserted) {
      this._removeCap();
    }

    if( $w.scrollTop() > this.offset && this.defaultState)  {
      this.changeState();
    }
    else if( $w.scrollTop() <= this.offset && !this.defaultState ) {
      this.toDefaultState();
    }



  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderShowHideObserver.prototype.changeState = function() {

    this.element.removeClass('u-header--untransitioned');

    if( this.animationTimeoutId ) clearTimeout( this.animationTimeoutId );

    switch( this.effect ) {
      case 'fade' :
        this.element.removeClass('u-header--faded');
      break;

      case 'slide' :
        this.element.removeClass('u-header--moved-up');
      break;

      default:
        this.element.removeClass('u-header--invisible');
    }

    this.defaultState = !this.defaultState;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderShowHideObserver.prototype.toDefaultState = function() {

    var self = this;

    this.animationTimeoutId = setTimeout(function(){
      self.element.addClass('u-header--untransitioned');
    }, this.transitionDuration );


    switch( this.effect ) {
      case 'fade' :
        this.element.addClass('u-header--faded');
      break;
      case 'slide' :
        this.element.addClass('u-header--moved-up');
      break;
      default:
        this.element.addClass('u-header--invisible');
    }

    this.defaultState = !this.defaultState;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  function HSHeaderChangeLogoObserver( element, config ) {

    if( !HSAbstractObserver.call( this, element ) ) return;

    this.config = {
      fixPointSelf: false
    }

    if( config && $.isPlainObject(config) ) this.config = $.extend(true, {}, this.config, config);

    this.init();

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeLogoObserver.prototype.init = function() {

    if(this.element.hasClass('js-header-fix-moment')) {
      this.hasFixedClass = true;
      this.element.removeClass('js-header-fix-moment');
    }
    if( this.config.fixPointSelf ) {
      this.offset = this.element.offset().top;
    }
    else {
      this.offset = isFinite( this.element.data('header-fix-moment') ) ? this.element.data('header-fix-moment') : 0;
    }
    if(this.hasFixedClass) {
      this.hasFixedClass = false;
      this.element.addClass('js-header-fix-moment');
    }

    this.imgs = this.element.find('.u-header__logo-img');
    this.defaultState = true;

    this.mainLogo = this.imgs.filter('.u-header__logo-img--main');
    this.additionalLogo = this.imgs.not('.u-header__logo-img--main');

    if( !this.imgs.length ) return this;

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeLogoObserver.prototype.destroy = function() {
    this.toDefaultState();

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeLogoObserver.prototype.check = function() {

    var $w = $(window);

    if( !this.imgs.length ) return this;

    if( $w.scrollTop() > this.offset && this.defaultState) {
      this.changeState();
    }
    else if( $w.scrollTop() <= this.offset && !this.defaultState ) {
      this.toDefaultState();
    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeLogoObserver.prototype.changeState = function() {

    if(this.mainLogo.length) {
      this.mainLogo.removeClass('u-header__logo-img--main');
    }
    if(this.additionalLogo.length) {
      this.additionalLogo.addClass('u-header__logo-img--main');
    }

    this.defaultState = !this.defaultState;

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeLogoObserver.prototype.toDefaultState = function() {

    if(this.mainLogo.length) {
      this.mainLogo.addClass('u-header__logo-img--main');
    }
    if(this.additionalLogo.length) {
      this.additionalLogo.removeClass('u-header__logo-img--main');
    }

    this.defaultState = !this.defaultState;

    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  function HSHeaderHideSectionObserver( element ) {
    if( !HSAbstractObserver.call(this, element) ) return;

    this.init();
  }

  /**
   *
   *
   * @param
   *
   * @return Object
   */
  HSHeaderHideSectionObserver.prototype.init = function() {

    this.offset = isFinite( this.element.data('header-fix-moment') ) ? this.element.data('header-fix-moment') : 5;
    this.section = this.element.find('.u-header__section--hidden');
    this.defaultState = true;

    this.sectionHeight = this.section.length ? this.section.outerHeight() : 0;


    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHideSectionObserver.prototype.destroy = function() {

    if( this.section.length ) {

      this.element.css({
        'margin-top': 0
      });

    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHideSectionObserver.prototype.check = function() {

    if(!this.section.length) return this;

    var $w = $(window),
        docScrolled = $w.scrollTop();

    if( docScrolled > this.offset && this.defaultState) {
      this.changeState();
    }
    else if( docScrolled <= this.offset && !this.defaultState ) {
      this.toDefaultState();
    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHideSectionObserver.prototype.changeState = function() {

    var self = this;

    this.element.stop().animate({
      'margin-top': self.sectionHeight * -1 - 1 // last '-1' is a small fix
    });

    this.defaultState = !this.defaultState;
    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHideSectionObserver.prototype.toDefaultState = function() {

    this.element.stop().animate({
      'margin-top': 0
    });

    this.defaultState = !this.defaultState;
    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  function HSHeaderChangeAppearanceObserver(element, config) {
    if( !HSAbstractObserver.call(this, element) ) return;

    this.config = {
      fixPointSelf: false
    }

    if( config && $.isPlainObject(config) ) this.config = $.extend(true, {}, this.config, config);

    this.init();
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeAppearanceObserver.prototype.init = function() {

    if(this.element.hasClass('js-header-fix-moment')) {
      this.hasFixedClass = true;
      this.element.removeClass('js-header-fix-moment');
    }

    if( this.config.fixPointSelf ) {
      this.offset = this.element.offset().top;
    }
    else {
      this.offset = isFinite( this.element.data('header-fix-moment') ) ? this.element.data('header-fix-moment') : 5;
    }

    if( this.hasFixedClass ) {
      this.hasFixedClass = false;
      this.element.addClass('js-header-fix-moment');
    }

    this.sections = this.element.find('[data-header-fix-moment-classes]');

    this.defaultState = true;


    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeAppearanceObserver.prototype.destroy = function() {

    this.toDefaultState();

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeAppearanceObserver.prototype.check = function() {

    if( !this.sections.length ) return this;

    var $w = $(window),
        docScrolled = $w.scrollTop();

    if( docScrolled > this.offset && this.defaultState) {
      this.changeState();
    }
    else if( docScrolled <= this.offset && !this.defaultState ) {
      this.toDefaultState();
    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeAppearanceObserver.prototype.changeState = function() {

    this.sections.each(function(i,el){

      var $this = $(el),
          classes = $this.data('header-fix-moment-classes'),
          exclude = $this.data('header-fix-moment-exclude');

      if( !classes && !exclude ) return;

      $this.addClass( classes + ' js-header-change-moment');
      $this.removeClass( exclude );

    });

    this.defaultState = !this.defaultState;
    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderChangeAppearanceObserver.prototype.toDefaultState = function() {

    this.sections.each(function(i,el){

      var $this = $(el),
          classes = $this.data('header-fix-moment-classes'),
          exclude = $this.data('header-fix-moment-exclude');

      if( !classes && !exclude ) return;

      $this.removeClass( classes + ' js-header-change-moment' );
      $this.addClass( exclude );

    });

    this.defaultState = !this.defaultState;
    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  function HSHeaderHasHiddenElement(element, config) {
    if( !HSAbstractObserver.call(this, element) ) return;

    this.config = {
      animated: true
    }

    if( config && $.isPlainObject(config) ) this.config = $.extend(true, {}, this.config, config);

    this.init();
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHasHiddenElement.prototype.init = function() {
    this.offset = isFinite( this.element.data('header-fix-moment') ) ? this.element.data('header-fix-moment') : 5;
    this.elements = this.element.find('.u-header--hidden-element');
    this.defaultState = true;
    return this;
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHasHiddenElement.prototype.destroy = function() {

    this.toDefaultState();

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHasHiddenElement.prototype.check = function() {

    if( !this.elements.length ) return this;

    var $w = $(window),
        docScrolled = $w.scrollTop();

    if( docScrolled > this.offset && this.defaultState) {
      this.changeState();
    }
    else if( docScrolled <= this.offset && !this.defaultState ) {
      this.toDefaultState();
    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHasHiddenElement.prototype.changeState = function() {

    if(this.config.animated) {
      this.elements.stop().slideUp();
    }
    else {
      this.elements.hide();
    }

    this.defaultState = !this.defaultState;
    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderHasHiddenElement.prototype.toDefaultState = function() {

    if(this.config.animated) {
      this.elements.stop().slideDown();
    }
    else {
      this.elements.show();
    }

    this.defaultState = !this.defaultState;
    return this;

  }





  /**
   *
   *
   * @param
   *
   * @return
   */
  function HSHeaderFloatingObserver(element, config) {
    if( !HSAbstractObserver.call(this, element) ) return;

    this.config = config && $.isPlainObject(config) ? $.extend(true, {}, this.config, config) : {};
    this.init();
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderFloatingObserver.prototype.init = function() {

    this.offset = this.element.offset().top;
    this.sections = this.element.find('.u-header__section');

    this.defaultState = true;

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderFloatingObserver.prototype.destroy = function() {

    this.toDefaultState();

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderFloatingObserver.prototype.check = function() {

    var $w = $(window),
        docScrolled = $w.scrollTop();

    if( docScrolled > this.offset && this.defaultState) {
      this.changeState();
    }
    else if( docScrolled <= this.offset && !this.defaultState ) {
      this.toDefaultState();
    }

    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderFloatingObserver.prototype.changeState = function() {

    this.element
        .addClass('js-header-fix-moment')
        .addClass( this.element.data('header-fix-moment-classes') )
        .removeClass( this.element.data('header-fix-moment-exclude') );

    if( this.sections.length ) {
      this.sections.each(function(i, el){

        var $section = $(el);

        $section.addClass( $section.data('header-fix-moment-classes') )
                .removeClass( $section.data('header-fix-moment-exclude') );

      });
    }

    this.defaultState = !this.defaultState;
    return this;

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSHeaderFloatingObserver.prototype.toDefaultState = function() {

    this.element
        .removeClass('js-header-fix-moment')
        .removeClass( this.element.data('header-fix-moment-classes') )
        .addClass( this.element.data('header-fix-moment-exclude') );

    if( this.sections.length ) {
      this.sections.each(function(i, el){

        var $section = $(el);

        $section.removeClass( $section.data('header-fix-moment-classes') )
                .addClass( $section.data('header-fix-moment-exclude') );

      });
    }

    this.defaultState = !this.defaultState;
    return this;

  }


  /**
   *
   *
   * @param
   *
   * @return
   */
  function HSHeaderWithoutBehaviorObserver( element ) { if( !HSAbstractObserver.call(this, element) ) return; }

  HSHeaderWithoutBehaviorObserver.prototype.check = function() {
    return this;
  }

  HSHeaderWithoutBehaviorObserver.prototype.init = function() {
    return this;
  }

  HSHeaderWithoutBehaviorObserver.prototype.destroy = function() {
    return this;
  }

  HSHeaderWithoutBehaviorObserver.prototype.changeState = function() {
    return this;
  }

  HSHeaderWithoutBehaviorObserver.prototype.toDefaultState = function() {
    return this;
  }


})(jQuery);
/**
 * Instagram wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSInstagram = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      get: 'user',
      limit: '12',
      template: '<div class="col-md-2 g-mb-30"><a href="{{link}}" target="_blank"><img class="img-fluid" src="{{image}}" /></a></div>'
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Instagram wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.instaInit();

      return this.pageCollection;

    },

    instaInit: function () {
      //Variables
      var $self, config, collection;
      //Variables values
      $self = this;
      config = $self.config;
      collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this, instaFeed, ID, userID, clientID, token;
        //Variables values
        $this = $(el);
        ID = $this.attr('id');
        userID = $this.data('user-id');
        clientID = $this.data('client-id');
        token = $this.data('token');

        instaFeed = new Instafeed({
          get: config['get'],
          limit: config['limit'],
          template: config['template'],
          userId: userID,
          clientId: clientID,
          accessToken: token,
          target: ID
        });

        instaFeed.run();

        //Actions
        collection = collection.add($this);
      });
    }

  }

})(jQuery);

/**
 * PinMap wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSPinMap = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      responsive: true,
      popover: {
        show: false,
        animate: true
      }
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of PinMap wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initPinMap();

      return this.pageCollection;

    },

    initPinMap: function () {
      //Variables
      var $self, config, collection;
      //Variables values
      $self = this;
      config = $self.config;
      collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this;
        //Variables values
        $this = $(el);

        $this.easypinShow(config);

        //Actions
        collection = collection.add($this);
      });
    }

  }

})(jQuery);

/**
 * SvgMap wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSSvgMap = {

    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      map: 'world_mill_en',
      zoomOnScroll: false
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of SvgMap wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initSvgMap();

      return this.pageCollection;

    },

    initSvgMap: function () {
      //Variables
      var $self, config, collection;
      //Variables values
      $self = this;
      config = $self.config;
      collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this;
        //Variables values
        $this = $(el);

        $this.vectorMap(config);

        //Actions
        collection = collection.add($this);
      });
    }

  }

})(jQuery);

/**
 * Markup copy wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSMarkupCopy = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Markup copy wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initMarkupCopy();

      return this.pageCollection;

    },

    initMarkupCopy: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection,
        shortcodeArr = {};

      $('[data-content-target]').each(function () {
        var $this = $(this),
          contentTarget = $this.data('content-target');

        shortcodeArr[contentTarget] = $(contentTarget).html().replace(/&quot;/g, "'").replace(/type=\"text\/plain\"/g, '');
      });

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var windW = $(window).width(),
          //Tabs
          $this = $(el),
          defaultText = $this.get(0).lastChild.nodeValue;

        $this.on('click', function (e) {
          e.preventDefault();
        });

        new Clipboard(el, {
          text: function (button) {
            //Variables
            var target = $(button).data('content-target');

            //Actions
            return shortcodeArr[target];
          }
        }).on('success', function () {
          //Variables
          var successText = $this.data('success-text');

          $this.get(0).lastChild.nodeValue = ' ' + successText + ' ';

          setTimeout(function () {
            $this.get(0).lastChild.nodeValue = defaultText;
          }, 800);
        });

        //Actions
        collection = collection.add(el);
      });
    }
  }

})(jQuery);

/**
 * Masked input wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSMaskedInput = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Masked input wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initMaskedInput();

      return this.pageCollection;

    },

    initMaskedInput: function () {
      //Variables
      var $self = this,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
            mask = $this.data('mask'),
            placeholder = $this.attr('placeholder');

        $this.mask(mask, {
          placeholder: placeholder ? placeholder : false
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);
/**
 * Event Modal wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';
  $.HSCore.components.HSModalEvent = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Modal Event wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {
      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initModalEvent();

      return this.pageCollection;
    },

    initModalEvent: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          eventType = $this.data('event-type'); //scrollToSection | callAfterTime

        if (eventType == 'scrollOnce') {
          $self.scrollOnce(el);
        } else if (eventType == 'callAfterTime') {
          $self.callAfterTime(el);
        } else if (eventType == 'scrollSequential') {
          $self.scrollSequential(el);
        } else if (eventType == 'exitIntent') {
          $self.exitIntent(el);
        }

        //Actions
        collection = collection.add($this);
      });
    },
    scrollOnce: function (el) {
      var counter = 0;

      $(window).on('scroll', function () {
        var $this = $(el),
          event = $this.data('event'),
          thisOffsetTop = $this.offset().top;

        if (counter == 0) {
          if ($(window).scrollTop() >= thisOffsetTop) {
            counter += 1;

            eval(event);
          }
        }
      });
    },
    scrollSequential: function (el) {
      var counter = 0;

      $(window).on('scroll', function () {
        var $this = $(el),
          eventFirst = $this.data('event-first'),
          eventSecond = $this.data('event-second'),
          thisOffsetTop = $this.offset().top;

        if (counter == 0) {
          if ($(window).scrollTop() >= thisOffsetTop) {
            counter += 1;

            eval(eventFirst);
          }
        } else if (counter == 1) {
          if ($(window).scrollTop() < thisOffsetTop) {
            counter -= 1;

            eval(eventSecond);
          }
        }
      });
    },
    callAfterTime: function (el) {
      var $this = $(el),
        event = $this.data('event'),
        time = $this.data('time');

      setTimeout(function () {
        eval(event);
      }, time);
    },
    exitIntent: function (el) {
      var $this = $(el),
        event = $this.data('event');

      $('html').mouseleave(function () {
        eval(event);

        $('html').unbind('mouseleave');
      });
    }
  };
})(jQuery);

/**
 * ModalWindow wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires appear.js (v1.0.3), custombox.js (v4.0.1)
 *
 */
;(function($){
	'use strict';

	$.HSCore.components.HSModalWindow = {

		/**
		 *
		 *
		 * @var Object _baseConfig
		 */
		_baseConfig : {
			bounds: 100,
			debounce: 50,
			overlayOpacity: .48,
			overlayColor: '#000000',
			speed: 400,
			type: 'onscroll', // onscroll, beforeunload, hashlink, ontarget, aftersometime
			effect: 'fadein',
			onOpen: function() {},
			onClose: function() {},
			onComplete: function() {},
		},

		/**
		 *
		 *
		 * @var jQuery _pageCollection
		 */
		_pageCollection : $(),

		/**
		 * Initialization of ModalWindow wrapper.
		 *
		 * @param String selector (optional)
		 * @param Object config (optional)
		 *
		 * @return jQuery - collection of initialized items.
		 */
		init: function(selector, config) {

			var collection = $(selector);
			if(!collection.length) return;

			config = config && $.isPlainObject(config) ? $.extend({}, this._baseConfig, config) : this._baseConfig;
			config.selector = selector;

			this._pageCollection = this._pageCollection.add( collection.not(this._pageCollection) );

			if(config.autonomous) {

				return this.initAutonomousModalWindows(collection, config);

			}

			return this.initBaseModalWindows(collection, config);

		},

		/**
		 * Initialization of each Autonomous Modal Window of the page.
		 *
		 * @param jQuery collection
		 * @param Object config
		 *
		 * @return jQuery collection
		 */
		initBaseModalWindows: function(collection, config){

			return collection.on('click', function(e){

				if(!('Custombox' in window)) return;

	      var $this = $(this),
	          target = $this.data('modal-target'),
	          effect = $this.data('modal-effect') || config['effect'];

	      if(!target || !$(target).length) return;

	      new Custombox.modal(
	      	{
						content: {
							target: target,
							effect: effect,
							onOpen: function() {
								config['onOpen'].call($(target));
							},
							onClose: function() {
								config['onClose'].call($(target));
							},
							onComplete: function() {
								config['onComplete'].call($(target));
							}
						},
						overlay: {
							color: $this.data('overlay-color') || config['overlayColor'],
							opacity: $this.data('overlay-opacity') || config['overlayOpacity'],
							speedIn: $this.data('speed') || config['speed'],
							speedOut: $this.data('speed') || config['speed']
						}
					}
	      ).open();

	      e.preventDefault();

			});

		},

		/**
		 * Initialization of each Autonomous Modal Window of the page.
		 *
		 * @param jQuery collection
		 * @param Object config
		 *
		 * @return jQuery collection
		 */
		initAutonomousModalWindows: function(collection, config) {

			var self = this;

			return collection.each(function(i, el) {

				var $this = $(el),
						type = $this.data('modal-type');

				switch(type) {

					case 'hashlink' :

						self.initHashLinkPopup($this, config);

					break;

					case 'onscroll' :

						self.initOnScrollPopup($this, config);

					break;

					case 'beforeunload' :

						self.initBeforeUnloadPopup($this, config);

					break;

					case 'ontarget' :

						self.initOnTargetPopup($this, config);

					break;

					case 'aftersometime' :

						self.initAfterSomeTimePopup($this, config);

					break;

				}

			});

		},

		/**
		 *
		 *
		 * @param jQuery popup
		 *
		 * @return undefined
		 */
		initHashLinkPopup: function(popup, config) {

			var self = this,
					hashItem = $(window.location.hash),
					target = $('#' + popup.attr('id'));

			if(hashItem.length && hashItem.attr('id') ==  popup.attr('id')){

				new Custombox.modal(
					{
						content: {
							target: '#' + popup.attr('id'),
							effect: popup.data('effect') || config['effect'],
							onOpen: function() {
								config['onOpen'].call($(target));
							},
							onClose: function() {
								config['onClose'].call($(target));
							},
							onComplete: function() {
								config['onComplete'].call($(target));
							}
						},
						overlay: {
							color: popup.data('overlay-color') || config['overlayColor'],
							opacity: popup.data('overlay-opacity') || config['overlayOpacity'],
							speedIn: popup.data('speed') || config['speed'],
							speedOut: popup.data('speed') || config['speed']
						}
					}
				).open();

			}

		},

		/**
		 *
		 *
		 * @param jQuery popup
		 *
		 * @return undefined
		 */
		initOnScrollPopup: function(popup, config) {

			var self = this,
					$window = $(window),
					breakpoint = popup.data('breakpoint') ? popup.data('breakpoint') : 0,
					target = $('#' + popup.attr('id'));


			$window.on('scroll.popup', function() {

				var scrolled = $window.scrollTop() + $window.height();

				if(scrolled >= breakpoint) {

					new Custombox.modal(
						{
							content: {
								target: '#' + popup.attr('id'),
								effect: popup.data('effect') || config['effect'],
								onOpen: function() {
									config['onOpen'].call($(target));
								},
								onClose: function() {
									config['onClose'].call($(target));
								},
								onComplete: function() {
									config['onComplete'].call($(target));
								}
							},
							overlay: {
								color: popup.data('overlay-color') || config['overlayColor'],
								opacity: popup.data('overlay-opacity') || config['overlayOpacity'],
								speedIn: popup.data('speed') || config['speed'],
								speedOut: popup.data('speed') || config['speed']
							}
						}
					).open();

					$window.off('scroll.popup');

				}

			});

			$window.trigger('scroll.popup');

		},

		/**
		 *
		 *
		 * @param jQuery popup
		 *
		 * @return undefined
		 */
		initBeforeUnloadPopup: function(popup, config) {

			var self = this,
					count = 0,
					target = $('#' + popup.attr('id')),
					timeoutId;

			window.addEventListener('mousemove', function(e) {

				if(timeoutId) clearTimeout(timeoutId);

		    timeoutId = setTimeout(function() {

		    	if (e.clientY < 10 && !count) {

				    count++;

				    new Custombox.modal(
							{
								content: {
									target: '#' + popup.attr('id'),
									effect: popup.data('effect') || config['effect'],
									onOpen: function() {
										config['onOpen'].call($(target));
									},
									onClose: function() {
										config['onClose'].call($(target));
									},
									onComplete: function() {
										config['onComplete'].call($(target));
									}
								},
								overlay: {
									color: popup.data('overlay-color') || config['overlayColor'],
									opacity: popup.data('overlay-opacity') || config['overlayOpacity'],
									speedIn: popup.data('speed') || config['speed'],
									speedOut: popup.data('speed') || config['speed']
								}
							}
						).open();
				    
		  		}

		  	}, 10);

			});
			

		},

		/**
		 *
		 *
		 * @param jQuery popup
		 *
		 * @return undefined
		 */
		initOnTargetPopup: function(popup, config) {

			var self = this,
					target = popup.data('target');

			if(!target || !$(target).length) return;

			appear({
				bounds: config['bounds'],
				debounce: config['debounce'],
				elements: function() {
					return document.querySelectorAll(target);
				},
				appear: function(element) {

					new Custombox.modal(
						{
							content: {
								target: '#' + popup.attr('id'),
								effect: popup.data('effect') || config['effect'],
								onOpen: function() {
									config['onOpen'].call($(target));
								},
								onClose: function() {
									config['onClose'].call($(target));
								},
								onComplete: function() {
									config['onComplete'].call($(target));
								}
							},
							overlay: {
								color: popup.data('overlay-color') || config['overlayColor'],
								opacity: popup.data('overlay-opacity') || config['overlayOpacity'],
								speedIn: popup.data('speed') || config['speed'],
								speedOut: popup.data('speed') || config['speed']
							}
						}
					).open();

				}
			});

		},

		/**
		 *
		 *
		 * @param jQuery popup
		 *
		 * @return undefined
		 */
		initAfterSomeTimePopup: function(popup, config) {

			var self = this,
				target = $('#' + popup.attr('id'));

			setTimeout(function() {

				new Custombox.modal(
					{
						content: {
							target: '#' + popup.attr('id'),
							effect: popup.data('effect') || config['effect'],
							onOpen: function() {
								config['onOpen'].call($(target));
							},
							onClose: function() {
								config['onClose'].call($(target));
							},
							onComplete: function() {
								config['onComplete'].call($(target));
							}
						},
						overlay: {
							color: popup.data('overlay-color') || config['overlayColor'],
							opacity: popup.data('overlay-opacity') || config['overlayOpacity'],
							speedIn: popup.data('speed') || config['speed'],
							speedOut: popup.data('speed') || config['speed']
						}
					}
				).open();

			}, popup.data('delay') ? popup.data('delay') : 10)

		}

	};

})(jQuery);

/**
 * Navigation component.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires HSScrollBar component (hs.scrollbar.js v1.0.0)
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSNavigation = {

    /**
     * Base configuration of the component.
     *
     * @private
     */
    _baseConfig: {
      navigationOverlayClasses: '',
      navigationInitClasses: '',
      navigationInitBodyClasses: '',
      navigationPosition: 'right',
      activeClass: 'u-main-nav--overlay-opened',
      navigationBreakpoint: 768,
      breakpointsMap: {
        'sm': 576,
        'md': 768,
        'lg': 992,
        'xl': 1200
      },
      afterOpen: function(){},
      afterClose: function(){}
    },

    /**
     * Collection of all initialized items on the page.
     *
     * @private
     */
    _pageCollection: $(),

    /**
     * Initializtion of the navigation.
     *
     * @param {jQuery} collection
     * @param {Object} config
     *
     * @public
     * @return {jQuery}
     */
    init: function( collection, config ) {

      var _self = this,
          $w = $(window);

      if(!collection || !collection.length) return $();

      config = config && $.isPlainObject(config) ? config : {};

      $w.on('resize.HSNavigation', function(e){

        if(_self.resizeTimeoutId) clearTimeout(_self.resizeTimeoutId);

        _self.resizeTimeoutId = setTimeout(function(){

          _self._pageCollection.each(function(i, el){

            var $this = $(el),
                HSNavigation = $this.data('HSNavigation');

            if($w.width() > HSNavigation.config.breakpointsMap[HSNavigation.config.navigationBreakpoint] && HSNavigation.isInitialized() ) {

              HSNavigation.destroy();

            }
            else if($w.width() <= HSNavigation.config.breakpointsMap[HSNavigation.config.navigationBreakpoint] && !HSNavigation.isInitialized()) {
              HSNavigation.init();
            }

          });

        }, 50);

      });


      collection.each(function(i, el){

        var $this = $(el),
            itemConfig = $.extend(true, {}, _self._baseConfig, config, $this.data());

        if( $this.data('HSNavigation') ) return;

        $this.data('HSNavigation', _self._factoryMethod( $this, itemConfig ));

        _self._pageCollection = _self._pageCollection.add( $this );

      });


      _self._pageCollection.each(function(i, el){

          var $this = $(el),
              HSNavigation = $this.data('HSNavigation');

          if($w.width() > HSNavigation.config.breakpointsMap[HSNavigation.config.navigationBreakpoint] ) {

            HSNavigation.destroy();

          }
          else if($w.width() <= HSNavigation.config.breakpointsMap[HSNavigation.config.navigationBreakpoint] ) {
            HSNavigation.init();
          }
      });

      return collection;

    },

    /**
     * Returns certain object relative to class name.
     *
     * @param {jQuery} element
     * @param {Object} config
     *
     * @private
     * @return {HSNavigationOverlay|HSNavigationPush}
     */
    _factoryMethod: function(element, config) {

      if( element.filter('[class*="u-main-nav--overlay"]').length ) {
        return new HSNavigationOverlay(element, config);
      }
      else if ( element.filter('[class*="u-main-nav--push"]').length ) {
       return new HSNavigationPush(element, config);
      }

    }

  };

  /**
   * Abstract class for all HSNavigation* objects.
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @return {Boolean}
   */
  function HSNavigationAbstract(element, config) {

    /**
     * Contains current jQuery object.
     *
     * @public
     */
    this.element = element;

    /**
     * Contains body jQuery object.
     *
     * @public
     */
    this.body = $('body');

    /**
     * Contains configuration.
     *
     * @public
     */
    this.config = config;

    /**
     * Reinitialization of the HSNavigation* object.
     *
     * @public
     */
    this.reinit = function() {

      this.destroy().init();

    }
  };

  /**
   * HSNavigationOverlay.
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSNavigationOverlay(element, config) {

    var _self = this;

    // extends some functionality from abstract class
    HSNavigationAbstract.call(this, element, config);

    Object.defineProperties(this, {

      overlayClasses: {
        get: function() {
          return 'u-main-nav__overlay ' + _self.config.navigationOverlayClasses
        }
      },

      bodyClasses: {
        get: function() {
          return 'u-main-nav--overlay-' + _self.config.navigationPosition
        }
      },

      isOpened: {
        get: function() {
          return _self.body.hasClass( _self.config.activeClass );
        }
      }

    });

  };


  /**
   * Initialization of the instance.
   *
   * @public
   */
  HSNavigationOverlay.prototype.init = function() {

    var _self = this;

    /**
     * Contains overlay object.
     *
     * @public
     */
    this.overlay = $('<div></div>', {
      class: _self.overlayClasses
    });

    if( $.HSCore.components.HSScrollBar ) {

      setTimeout(function(){
        $.HSCore.components.HSScrollBar.init( _self.element.find( '.u-main-nav__list-wrapper' ) );
      }, 10);

    }

    this.toggler = $('[data-target="#'+ this.element.attr('id') +'"]');

    if(this.toggler && this.toggler.length) this.toggler.css('display', 'block');

    this.body.addClass( this.bodyClasses );
    this.element
        .addClass('u-main-nav--overlay')
        .append(this.overlay);

    setTimeout(function(){
      _self.element.addClass( _self.config.navigationInitClasses );
      _self.body.addClass( _self.config.navigationInitBodyClasses );

      _self.transitionDuration = parseFloat( getComputedStyle(_self.element.get(0)).transitionDuration, 10 );


      if(_self.transitionDuration > 0) {

        _self.element.on("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(e){

          if(_self.isOpened && (e.originalEvent.propertyName == 'right' || e.originalEvent.propertyName == 'left')) {
            _self.config.afterOpen.call(_self.element, _self.overlay);
          }
          else if(!_self.isOpened && (e.originalEvent.propertyName == 'right' || e.originalEvent.propertyName == 'left')) {
            _self.config.afterClose.call(_self.element, _self.overlay);
          }

          e.stopPropagation();
          e.preventDefault();

        });

      }

    },50);

    this._bindEvents();


    this.isInit = true;

  };


  /**
   * Destroys the instance.
   *
   * @public
   */
  HSNavigationOverlay.prototype.destroy = function() {

    var _self = this;

    if(this.overlay) this.overlay.remove();

    if(this.toggler && this.toggler.length) this.toggler.hide();

    if( $.HSCore.components.HSScrollBar ) {

      setTimeout(function(){
        $.HSCore.components.HSScrollBar.destroy( _self.element.find( '.u-main-nav__list-wrapper' ) );
      }, 10);

    }

    setTimeout(function(){
      if(_self.transitionDuration && _self.transitionDuration > 0) {
        _self.element.off("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend");
      }
    },50);

    this.body.removeClass( this.bodyClasses );
    this.element
        .removeClass('u-main-nav--overlay')
        .removeClass(this.config.navigationInitClasses);

    this.body.removeClass( this.bodyClasses ).removeClass(this.config.navigationInitBodyClasses);

    this._unbindEvents();

    this.isInit = false;

  };

  /**
   * Binds necessary events.
   *
   * @private
   */
  HSNavigationOverlay.prototype._bindEvents = function() {

    var _self = this;

    if(this.toggler && this.toggler.length) {
      this.toggler.on('click.HSNavigation', function(e){

        if(_self.isOpened) {
          _self.close();
        }
        else {
          _self.open();
        }

        e.preventDefault();

      });
    }

    this.overlay.on('click.HSNavigation', function(e){
      _self.close();
    });

    $(document).on('keyup.HSNavigation', function(e){
      if(e.keyCode == 27) {
        _self.close();
      }
    });

  };

  /**
   * Unbinds necessary events.
   *
   * @private
   */
  HSNavigationOverlay.prototype._unbindEvents = function() {

    if(this.toggler && this.toggler.length) {
      this.toggler.off('click.HSNavigation');
    }

    if(this.overlay && this.overlay.length) {
      this.overlay.off('click.HSNavigation');
    }

    $(document).off('keyup.HSNavigation');

  };


  /**
   * Shows the navigation.
   *
   * @public
   */
  HSNavigationOverlay.prototype.open = function() {

    this.body.addClass( this.config.activeClass );

    if(this.transitionDuration !== undefined && this.transitionDuration == 0) {
      this.config.afterOpen.call(this.element, this.overlay);
    }

  };

  /**
   * Hides the navigation.
   *
   * @public
   */
  HSNavigationOverlay.prototype.close = function() {

    var hamburgers = this.toggler && this.toggler.length ? this.toggler.find('.is-active') : $();

    if(hamburgers.length) hamburgers.removeClass('is-active');

    this.body.removeClass( this.config.activeClass );

    if(this.transitionDuration !== undefined && this.transitionDuration == 0) {
      this.config.afterClose.call(this.element, this.overlay);
    }

  };

  /**
   * Returns true if the navigation has been initialized.
   *
   * @public
   * @return {Boolean}
   */
  HSNavigationOverlay.prototype.isInitialized = function() {

    return this.isInit;

  };

  /**
   * HSNavigationPush.
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSNavigationPush(element, config) {

    var _self = this;

    // extends some functionality from abstract class
    HSNavigationAbstract.call(this, element, config);

    Object.defineProperties(this, {

      overlayClasses: {
        get: function() {
          return 'u-main-nav__overlay ' + _self.config.navigationOverlayClasses
        }
      },

      bodyClasses: {
        get: function() {
          return 'u-main-nav--push-' + _self.config.navigationPosition
        }
      },

      isOpened: {
        get: function() {
          return _self.body.hasClass( _self.config.activeClass );
        }
      }

    });

    // this.init();

  };


  /**
   * Initialization of the instance.
   *
   * @public
   */
  HSNavigationPush.prototype.init = function() {

    var _self = this;

    /**
     * Contains overlay object.
     *
     * @public
     */
    this.overlay = $('<div></div>', {
      class: _self.overlayClasses
    });

    if( $.HSCore.components.HSScrollBar ) {

      setTimeout(function(){
        $.HSCore.components.HSScrollBar.init( _self.element.find( '.u-main-nav__list-wrapper' ) );
      }, 10);

    }

    this.toggler = $('[data-target="#'+ this.element.attr('id') +'"]');

    if(this.toggler && this.toggler.length) this.toggler.css('display', 'block');

    this.body.addClass( this.bodyClasses );
    this.element
        .addClass('u-main-nav--push')
        .append(this.overlay);

    setTimeout(function(){
      _self.element.addClass( _self.config.navigationInitClasses );
      _self.body.addClass( _self.config.navigationInitBodyClasses );

      _self.transitionDuration = parseFloat( getComputedStyle(_self.element.get(0)).transitionDuration, 10 );


      if(_self.transitionDuration > 0) {

        _self.element.on("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(e){

          if(_self.isOpened && (e.originalEvent.propertyName == 'right' || e.originalEvent.propertyName == 'left')) {
            _self.config.afterOpen.call(_self.element, _self.overlay);
          }
          else if(!_self.isOpened && (e.originalEvent.propertyName == 'right' || e.originalEvent.propertyName == 'left')) {
            _self.config.afterClose.call(_self.element, _self.overlay);
          }

          e.stopPropagation();
          e.preventDefault();

        });

      }

    },50);

    this._bindEvents();

    this.isInit = true;

  };


  /**
   * Destroys the instance.
   *
   * @public
   */
  HSNavigationPush.prototype.destroy = function() {

    var _self = this;

    if(this.overlay) this.overlay.remove();

    if(this.toggler && this.toggler.length) this.toggler.hide();

    if( $.HSCore.components.HSScrollBar ) {

      setTimeout(function(){
        $.HSCore.components.HSScrollBar.destroy( _self.element.find( '.u-main-nav__list-wrapper' ) );
      }, 10);

    }

    setTimeout(function(){
      if(_self.transitionDuration && _self.transitionDuration > 0) {
        _self.element.off("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend");
      }
    },50);

    this.body.removeClass( this.bodyClasses ).removeClass(this.config.navigationInitBodyClasses);
    this.element
        .removeClass('u-main-nav--push')
        .removeClass(this.config.navigationInitClasses);

    this._unbindEvents();

    this.isInit = false;

  };

  /**
   * Binds necessary events.
   *
   * @private
   */
  HSNavigationPush.prototype._bindEvents = function() {

    var _self = this;

    if(this.toggler && this.toggler.length) {
      this.toggler.on('click.HSNavigation', function(e){

        if(_self.isOpened) {
          _self.close();
        }
        else {
          _self.open();
        }

        e.preventDefault();

      });
    }

    this.overlay.on('click.HSNavigation', function(e){
      _self.close();
    });

    $(document).on('keyup.HSNavigation', function(e){
      if(e.keyCode == 27) {
        _self.close();
      }
    });

  };

  /**
   * Unbinds necessary events.
   *
   * @private
   */
  HSNavigationPush.prototype._unbindEvents = function() {

    if(this.toggler && this.toggler.length) {
      this.toggler.off('click.HSNavigation');
    }

    if(this.overlay && this.overlay.length) {
      this.overlay.off('click.HSNavigation');
    }

    $(document).off('keyup.HSNavigation');

  };


  /**
   * Shows the navigation.
   *
   * @public
   */
  HSNavigationPush.prototype.open = function() {

    this.body.addClass( this.config.activeClass );

    if(this.transitionDuration !== undefined && this.transitionDuration == 0) {
      this.config.afterOpen.call(this.element, this.overlay);
    }

  };

  /**
   * Hides the navigation.
   *
   * @public
   */
  HSNavigationPush.prototype.close = function() {

    var hamburgers = this.toggler && this.toggler.length ? this.toggler.find('.is-active') : $();

    if(hamburgers.length) hamburgers.removeClass('is-active');

    this.body.removeClass( this.config.activeClass );

    if(this.transitionDuration !== undefined && this.transitionDuration == 0) {
      this.config.afterClose.call(this.element, this.overlay);
    }

  };

  /**
   * Returns true if the navigation has been initialized.
   *
   * @public
   * @return {Boolean}
   */
  HSNavigationPush.prototype.isInitialized = function() {

    return this.isInit;

  };


})(jQuery);
/**
 * NL Form wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSNLForm = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of NL Form wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initNLForm();

      return this.pageCollection;

    },

    initNLForm: function () {
      //Variables
      var $self = this,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        var $this = $(el)[0].id;

        //Variables
        var nlform = new NLForm(document.getElementById($this));

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);
/**
 * Wrapper for creating animation when an element appear in the screen.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires appear.js 
 *
 */
;
(function($) {
  'use strict';

  $.HSCore.components.HSOnScrollAnimation = {

    /**
     * Base configuration.
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      bounds: -100,
      debounce: 50,
      inViewportClass: 'u-in-viewport',
      animation: 'fadeInUp',
      animationOut: false,
      animationDelay: 0,
      animationDuration: 1000,
      afterShow: function(){},
      onShown: function(){},
      onHidded: function(){}
    },

    /**
     * Collection of all instances of the page.
     *
     * @var jQuery _pageCollection
     */
    _pageCollection: $(),


    /**
     * Initialization of animation.
     *
     * @param jQuery selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery _pageCollection - collection of initialized items.
     */
    init: function(selector, config) {

      if( !selector || !$(selector).length ) return;

      var self = this;

      this.config = config && $.isPlainObject(config) ? $.extend(true, {}, this._baseConfig, config) : this._baseConfig;

      appear({
        bounds: self.config['bounds'],
        reappear: false,
        debounce: self.config['debounce'],
        elements: function(){
          return document.querySelectorAll(selector);
        },
        init: function() {
          $(selector).each(function(i, el){

            var $this = $(el);

            if(!$this.data('HSAnimationElement')) {
              $this.data('HSAnimationElement', new HSAnimationElement( $this, self.config ));

              self._pageCollection = self._pageCollection.add($this);
            }

          });
        },
        appear: function(el) {

          var $el = $(el);
          
          if(!$el.hasClass( self.config.inViewportClass )) {
            $el.data('HSAnimationElement').show();
          }
        }

      })


      return this._pageCollection;

    }

  }

  /**
   * HSAnimationElement constructor function.
   * 
   * @param jQuery element
   * @param Object config
   *
   * @return undefined
   */
  function HSAnimationElement(element, config) {

    if( !element || !element.length ) return;

    var self = this;

    this.element = element;
    this.config = config && $.isPlainObject(config) ? $.extend(true, {}, config, element.data()) : element.data();

    if( !isFinite( this.config.animationDelay ) ) this.config.animationDelay = 0;
    if( !isFinite( this.config.animationDuration ) ) this.config.animationDuration = 1000;

    element.css({
      'animation-duration': self.config.animationDuration + 'ms'
    });

  }

  /**
   * Shows element.
   * 
   * @return undefined
   */
  HSAnimationElement.prototype.show = function() {

    var self = this;

    if(this.config.animationDelay) {
      this.timeOutId = setTimeout( function(){

        self.element
            .removeClass(self.config.animationOut)
            .addClass(self.config.animation + ' ' + self.config.inViewportClass);
        self.config.afterShow.call( self.element );

        self.callbackTimeoutId = setTimeout( function(){
          self.config.onShown.call( self.element );
        }, self.config.animationDuration );

      }, this.config.animationDelay );
    }
    else {
      this.element
          .removeClass(this.config.animationOut)
          .addClass(this.config.animation + ' ' + this.config.inViewportClass);
      this.config.afterShow.call( this.element );

      this.callbackTimeoutId = setTimeout( function(){
        self.config.onShown.call( self.element );
      }, this.config.animationDuration );
    }

  }

  /**
   * Hides element.
   * 
   * @return undefined
   */
  HSAnimationElement.prototype.hide = function() {

    var self = this;

    if( !this.element.hasClass(this.config.inViewportClass) ) return;

    if( this.config.animationOut ) {

      this.element
        .removeClass( this.config.animation )
        .addClass( this.config.animationOut );

      this.callbackTimeoutId = setTimeout(function(){

        self.element.removeClass(self.config.inViewportClass);
        self.config.onHidded.call( self.element );

      }, this.config.animationDuration);

    }
    else {

      this.element.removeClass(this.config.inViewportClass + ' ' + this.config.animation);
      this.config.onHidded.call( this.element );
    }

  }

})(jQuery);

/**
 * HSPopup - wrapper of the Fancybox plugin.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires fancybox.js (v2.1.5)
 *
 */
;(function($){
	'use strict';

	$.HSCore.components.HSPopup = {

		/**
		 * Base configuration of the wrapper.
		 *
		 * @protected
		 */
		_baseConfig: {
			baseClass: 'u-fancybox-theme',
			slideClass: 'u-fancybox-slide',
			speed: 1000,
			slideSpeedCoefficient: 1,
			infobar: false,
			slideShow: false,
			fullScreen: true,
			thumbs: false,
			closeBtn: true,
			baseTpl	: '<div class="fancybox-container" role="dialog" tabindex="-1">' +
	        '<div class="fancybox-bg"></div>' +
	        '<div class="fancybox-controls">' +
	            '<div class="fancybox-infobar">' +
	                '<div class="fancybox-infobar__body">' +
	                    '<span class="js-fancybox-index"></span>&nbsp;/&nbsp;<span class="js-fancybox-count"></span>' +
	                '</div>' +
	            '</div>' +
	            '<div class="fancybox-buttons">' +
	                '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="Close (Esc)"></button>' +
	            '</div>' +
	        '</div>' +
	        '<div class="fancybox-slider-wrap">' +
	        		'<button data-fancybox-previous class="fancybox-button fancybox-button--left" title="Previous"></button>' +
	        		'<button data-fancybox-next class="fancybox-button fancybox-button--right" title="Next"></button>' +
	            '<div class="fancybox-slider"></div>' +
	        '</div>' +
	        '<div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div>' +
	    '</div>',
    	onInit: $.noop,
    	beforeMove: $.noop,
    	beforeClose: $.noop
		},

		/**
		 * Initialization of the wrapper.
		 *
		 * @param {String} selector
		 * @param {Object} config (optional)
		 * @public
		 */
		init: function(selector, config) {

			if(!selector) return;

			var hiddenGallery,
					$collection = $(selector);

			if(!$collection.length) return;

			config = config && $.isPlainObject(config) ? $.extend(true, {}, this._baseConfig, config) : this._baseConfig;
			config = this._predefineCallbacks( config );

			this.$body = $('body');

			this.initGallery(selector, config);

		},

		/**
		 * Initialization of a gallery.
		 *
		 * @param {String} selector
		 * @param {Object} config (optional)
		 * @public
		 */
		initGallery: function(selector, config) {

			$('body').on('click.HSPopup', selector, function(e) {

				var $this = $(this),
						index = 0,
						$gallery,
						predefinedCollection = [],
						collectionItem;

				if( $this.data('fancybox-gallery') ) {
					$gallery = $('[data-fancybox-gallery="' + $this.data('fancybox-gallery') + '"]');
				}
				else if ( $this.data('fancybox-hidden-gallery') ) {
					$gallery = $('[data-fancybox-hidden-gallery="' + $this.data('fancybox-hidden-gallery') + '"]');
				}


				if( $gallery && $gallery.length ) {

					index = $gallery.index( $this );

					$gallery.each(function(i, el){
						var $el = $(el);

						collectionItem = {
							src: $el.attr(el.nodeName === "IMG" || el.nodeName === "IFRAME" ? 'src' : 'href'),
							customOpts: {
								fancyboxAnimateIn: $el.data('fancybox-animate-in'),
								fancyboxAnimateOut: $el.data('fancybox-animate-out'),
								fancyboxSpeed: $el.data('fancybox-speed'),
								fancyboxSlideSpeed: $el.data('fancybox-slide-speed'),
								fancyboxBlurBg: $el.data('fancybox-blur-bg'),
								fancyboxBg: $el.data('fancybox-bg')
							}
						};

						if( $el.data('fancybox-type') ) {
							collectionItem.type = $el.data('fancybox-type');
							console.log($el);
						}

						predefinedCollection.push(collectionItem);
					});
					console.log(predefinedCollection);
				}
				else {

					collectionItem = {
						src: $this.attr('href'),
						customOpts: {
							fancyboxAnimateIn: $this.data('fancybox-animate-in'),
							fancyboxAnimateOut: $this.data('fancybox-animate-out'),
							fancyboxSpeed: $this.data('fancybox-speed'),
							fancyboxSlideSpeed: $this.data('fancybox-slide-speed'),
							fancyboxBlurBg: $this.data('fancybox-blur-bg'),
							fancyboxBg: $this.data('fancybox-bg')
						}
					};

					if( $this.data('fancybox-type') ) {
						collectionItem.type = $this.data('fancybox-type');
					}

					predefinedCollection = [collectionItem];
				}

				$.fancybox.open(
					predefinedCollection,
					predefinedCollection[index].customOpts.fancyboxSpeed ? $.extend(true, {}, config, {
						speed: predefinedCollection[index].customOpts.fancyboxSpeed
					}) : config,
					index
				);

				e.preventDefault();
			});

		},

		/**
		 * Integration of custom options.
		 *
		 * @param {Object} config
		 * @private
		 * @returns {Object}
		 */
		_predefineCallbacks: function( config ) {

			var self = this,
					onInitCallback = config.onInit,
					beforeMoveCallback = config.beforeMove,
					beforeCloseCallback = config.beforeClose;

			config.onInit = function( instance ) {
				self._defaultBgColor = instance.$refs.bg.css('background-color');

				if(instance.group.length > 1) {
					instance.$refs.container.find('.fancybox-button--left, .fancybox-button--right').show();
				}
				if( $.isFunction( onInitCallback ) ) onInitCallback.call(this, instance);
			};

			config.beforeMove = function( instance, slide ) {

				if( self._currentSlide ) {
					self._closeSlide( self._currentSlide, instance );
				}

				setTimeout( function() {

					self._openSlide( slide, instance );

				}, 0 );

				self._currentSlide = slide;
				beforeMoveCallback.call(this, instance, slide);

			};

			config.beforeClose = function( instance, slide ) {

				setTimeout( function() {

					self._closeSlide( slide, instance );

				}, 0 );

				beforeCloseCallback.call(this, instance, slide);

			};

			return config;
		},

		/**
		 * Closes the specified slide.
		 *
		 * @param {Object} slide
		 * @param {Object} instance
		 * @private
		 */
		_closeSlide: function( slide, instance ) {

			var $image = $(slide.$image),
					itemData = slide.customOpts ? slide.customOpts : slide.opts.$orig.data(),
					groupLength = instance.group.length;

			this._blurBg(false);

			if( itemData.fancyboxAnimateOut ) {
				if( $image.hasClass(itemData.fancyboxAnimateIn) ) $image.removeClass( itemData.fancyboxAnimateIn );
				$image.addClass(itemData.fancyboxAnimateOut );
			}

		},

		/**
		 * Opens the specified slide.
		 *
		 * @param {Object} slide
		 * @param {Object} instance
		 * @private
		 */
		_openSlide: function( slide, instance ) {

			var $image = $(slide.$image),
					itemData = slide.customOpts ? slide.customOpts : slide.opts.$orig.data();

			instance.$refs.bg.css(
				'background-color',
				(itemData.fancyboxBg ? itemData.fancyboxBg : this._defaultBgColor)
			);

			this._blurBg(itemData.fancyboxBlurBg ? true : false);

			$image.css('animation-duration', (itemData.fancyboxSlideSpeed && itemData.fancyboxSlideSpeed >= slide.opts.speed ? itemData.fancyboxSlideSpeed : slide.opts.speed * Math.abs( slide.opts.slideSpeedCoefficient )) + 'ms');

			if( itemData.fancyboxAnimateIn ) {
				if( $image.hasClass( itemData.fancyboxAnimateOut ) ) $image.removeClass( itemData.fancyboxAnimateOut );
				$image.addClass( 'animated ' + itemData.fancyboxAnimateIn );
			}
		},

		/**
		 * Makes blur background while slide is opening.
		 *
		 * @param {Boolean} isBlur
		 * @private
		 */
		_blurBg: function(isBlur) {

			var self = this;

			if( isBlur ) {

				if( this._blurBgTimeOut ) clearTimeout( this._blurBgTimeOut );

				if( !this.blurBgContainer ) {
					this.blurBgContainer = $('<div></div>', {
						class: 'u-fancybox-blur-bg-container'
					});
					this.$body.append(this.blurBgContainer);
				}

				if( this.blurBgContainer.children().length ) return;

				this.blurBgContainer.append( this.$body.children().not('.fancybox-container') );

			}
			else {

				if(!this.blurBgContainer || !this.blurBgContainer.children().length) return;

				this._blurBgTimeOut = setTimeout(function(){

					self.$body.append( self.blurBgContainer.children() );
				}, 10)

			}

		}

	};

})(jQuery);
/**
 * Progress Bar wrapper.
 * 
 * @author Htmlstream 
 * @version 1.0
 * @requires appear.js (v1.0.3)
 *
 */
;(function($){
	'use strict';

	$.HSCore.components.HSProgressBar = {

		/**
		 * 
		 * 
		 * @var Object _baseConfig
		 */
		_baseConfig : {
			bounds: -100,
			debounce: 10,
			time: 1000,
			fps: 60,
			rtl: false,
			direction: 'horizontal',
			useProgressElement: false,
			indicatorSelector: 'progress-bar-indicator',
			moveElementSelector: false,
			moveElementTo: 'currentPosition',
			onChange: function(value){},
			beforeUpdate: function(){},
			afterUpdate: function(){},
			onMoveElementChange: function(value){},
			beforeMoveElementUpdate: function(){},
			afterMoveElementUpdate: function(){}
		},

		/**
		 * 
		 * 
		 * @var jQuery _pageCollection
		 */
		_pageCollection : $(),

		/**
		 * Initialization of Progress Bar wrapper.
		 * 
		 * @param String selector (optional)
		 * @param Object config (optional)
		 *
		 * @return jQuery currentCollection - collection of initialized items.
		 */
		init: function(selector, config){

			if(!(selector && $(selector).length)) return;

			this.extendHorizontalProgressBar();
			this.extendVerticalProgressBar();

			return this._initProgressBar(selector, config && $.isPlainObject(config) ? $.extend(true, {}, this._baseConfig, config) : this._baseConfig);

		},

		/**
		 * 
		 * Initialization of each Progress Bar of the page.
		 *
		 * @return undefined
		 */
		_initProgressBar: function(selector, config) {

			var self = this,
					currentCollection = $();

			appear({

				bounds: config['bounds'],
				debounce: config['debounce'],

				init: function() {

					$(selector).each(function(i, el) {

						var $this = $(el);

						if(config['direction'] === 'horizontal') {

							$this.data('ProgressBar', new self.HorizontalProgressBar($this, config));

						}
						else {

							$this.data('ProgressBar', new self.VerticalProgressBar($this, config));

						}

						currentCollection = currentCollection.add($this);
						self._pageCollection = self._pageCollection.add($this);

					});

				},

				elements: function() {

					return document.querySelectorAll(selector);

				},

				appear: function(el) {

					// console.log( $(el).data('ProgressBar'), $(el).data('value') );

					$(el).data('ProgressBar').update($(el).data('value'));

				}

			});

			return currentCollection;

		},

		/**
		 * Constructor Function of Horizontal Progress Bar
		 * 
		 * @param jQuery element
		 * @param Object config
		 *
		 */
		HorizontalProgressBar: function(element, config) {

			this.element = element;
			this.indicator = this.element.find( config.indicatorSelector );

			this.config = config;
			this.moveElement = config['moveElementSelector'] ? element.parent().find(config['moveElementSelector']) : $();

			if(this.moveElement.length) {

				if(config['rtl']) {
					this.moveElement.css({
						'left': 'auto',
					 	'right': 0,
					 	'margin-right': this.moveElement.outerWidth() / -2
					});
				}
				else {
					this.moveElement.css({
					 	'left': 0,
					 	'margin-left': this.moveElement.outerWidth() / -2
					});
				}

			}

			if(this.config.useProgressElement) {
				this.element.data( 'value', this.element.attr( 'value' ) );
				this.element.attr('value', 0);
			}
			else {
				this.element.data(
					'value', 
					this.indicator.length ? Math.round( this.indicator.outerWidth() / this.element.outerWidth() * 100 ) : 0
				);
				this.indicator.css('width', '0%');
			}

		},

		/**
		 * Constructor Function of Vertical Progress Bar
		 * 
		 * @param jQuery element
		 * @param Object config
		 *
		 */
		VerticalProgressBar: function(element, config) {

			this.element = element;
			this.config = config;
			this.indicator = element.find(config['indicatorSelector']);

			if(!this.indicator.length) return;

			element.data('value', parseInt(this.indicator.css('height'), 10) / this.indicator.parent().outerHeight() * 100);
			this.indicator.css('height', 0);

		},

		/**
		 * Extends HorizontalProgressBar.
		 *
		 * @return undefined
		 */
		extendHorizontalProgressBar: function() {

			/**
			 * Sets new value of the Progress Bar.
			 * 
			 * @param Number value
			 *
			 * @return undefined
			 */
			this.HorizontalProgressBar.prototype.update = function(value) {

				var self = this;

				if( this.config.useProgressElement ) {

					var fps = (this.config['time'] / this.config['fps']),
							iterationValue = parseInt(value / fps, 10),
							counter = 0,
							self = this;

					if(iterationValue == 0) iterationValue = 1;

					this.config.beforeUpdate.call(this.element);
					if(this.moveElement.length) this.config.beforeMoveElementUpdate.call(this.moveElement);

					if(self.config.moveElementSelector && self.config['moveElementTo'] == 'end') {

						var mCounter = 0,
								mIterationValue = parseInt(100 / fps, 10);

						if(mIterationValue == 0) mIterationValue = 1;

						var mCounterId = setInterval(function() {

							self.moveSubElement(mCounter+=mIterationValue);
							if(self.moveElement.length) self.config.onMoveElementChange.call(self.moveElement, mCounter+=mIterationValue);

							if(mCounter > 100) {
								clearInterval(mCounterId);
								self.moveSubElement(100);
								if(self.moveElement.length) self.config.afterMoveElementUpdate.call(self.moveElement);
							}

						}, fps);

					}

					this.element.data('intervalId', setInterval(function(){

						var currentValue = counter += iterationValue;

						self.element.attr('value', currentValue);
						self.config.onChange.call(self.element, currentValue);

						if(self.config.moveElementSelector && self.config['moveElementTo'] == 'currentPosition') self.moveSubElement(currentValue);

						if(counter > value) {

							self.element.attr('value', value);
							if(self.config.moveElementSelector && self.config['moveElementTo'] == 'currentPosition') self.moveSubElement(value);
							clearInterval(self.element.data('intervalId'));
							self.config.afterUpdate.call(self.element);

						}

					}, fps));
				}
				else {
					if( this.indicator.length ) {
						this.indicator.stop().animate({
							'width': value + '%'
						}, {
							duration: self.config.time,
							complete: function() {
								self.config.afterUpdate.call(self.element);
							}
						});
					}
				}

			};

			/**
			 * 
			 * 
			 * @param 
			 *
			 * @return 
			 */
			this.HorizontalProgressBar.prototype.moveSubElement = function(value, duration) {

				if(!this.moveElement.length) return;

				var self = this;

				this.moveElement.css(this.config['rtl'] ? 'right' : 'left', value + '%');

			};

		},

		/**
		 * Extends VerticalProgressBars.
		 * 
		 *
		 * @return undefined
		 */
		extendVerticalProgressBar: function() {

			/**
			 * Sets new value of the Progress Bar.
			 * 
			 * @param Number value
			 *
			 * @return undefined
			 */
			this.VerticalProgressBar.prototype.update = function(value) {

				this.indicator.stop().animate({
					height: value + '%'
				});
				
			}

		},


		/**
		 * Returns full collection of all initialized progress bars.
		 * 
		 *
		 * @return jQuery _pageCollection
		 */
		get: function() {

			return this._pageCollection;

		},

		/**
		 * Returns API of the progress bar by index in collection.
		 * 
		 * @param Number index
		 *
		 * @return HorizontalProgressBar | VerticalProgressBar
		 */
		getAPI: function(index) {

			if(this._pageCollection.eq(index).length) return this._pageCollection.eq(index).data('ProgressBar');

			return null;

		}

		
	};

})(jQuery);
/**
 * Rating wrapper.
 * 
 * @author Htmlstream 
 * @version 1.0
 *
 */
;(function($){
	'use strict';

	$.HSCore.components.HSRating = {

		/**
		 * Base rating configuration.
		 * 
		 * @var Object _baseConfig
		 */
		_baseConfig : {
			rtl: false,
			containerClass: 'g-rating',
			backwardClass: 'g-rating-backward',
			forwardClass: 'g-rating-forward',
			spacing: 0
		},

		/**
		 * Collection of all initialized items.
		 * 
		 * @var jQuery _pageCollection
		 */
		_pageCollection : $(),

		/**
		 * Initializes rating items.
		 * 
		 * @param jQuery collection
		 *
		 * @return jQuery|undefined
		 */
		init: function(collection, config) {

			if(!collection || !collection.length) return;

			config = config && $.isPlainObject(config) ? $.extend(true, {}, this._baseConfig, config) : this._baseConfig;

			var self = this;

			return collection.each(function(i, el){

				var $this = $(el);

				config = $.extend(true, {}, config, $this.data());


				if(!$this.data('rating-instance')) {

					$this.data('rating-instance',new Rating( $this, $this.data('rating'), config ));

					self._pageCollection = self._pageCollection.add($this);

				}

			});

		}

		
	};

	/**
	 * Rating constructor function.
	 * 
	 * @param jQuery element
	 * @param Number value
	 */
	function Rating( element, value, config ) {

		this.value = value;
		this.element = element;
		this.config = config;

		this.init();

	}

	/**
	 * Initializes single rating item.
	 * 
	 * @return undefined
	 */
	Rating.prototype.init = function() {

		var self = this;

		this.container = $('<div></div>', {
			class: self.config.containerClass,
			style: 'display: inline-block; position: relative; z-index: 1; white-space: nowrap;'
		});

		this.forward = $('<div></div>', {
			class: self.config.forwardClass,
			style: 'position: absolute; left: 0; top: 0; height: 100%; overflow: hidden;'
		});

		this.backward = $('<div></div>', {
			class: self.config.backwardClass,
			style: 'position: relative; z-index: 1;'
		});

		for(var i = 0; i < 5; i++) {

			var starEmpty = $('<i></i>', {
						class: self.element.data('backward-icons-classes') ? self.element.data('backward-icons-classes') : 'fa fa-star-o'
					}),
					starFilled = $('<i></i>', {
						class: self.element.data('forward-icons-classes') ? self.element.data('forward-icons-classes') : 'fa fa-star'
					});


			this.forward.append(starFilled);
			this.backward.append(starEmpty);

		}

		this.container.append(this.forward);
		this.container.append(this.backward);

		this.element.append(this.container);

		this.forward.css('width',  this.value / 5 * 100 + '%');

		this.makeSpacing();

	};

	Rating.prototype.makeSpacing = function() {

		var self = this;

		this.forward.children().add(this.backward.children()).css({
			'margin-left': self.config.spacing,
			'margin-right': self.config.spacing
		});

		this.container.css({
			'margin-left': self.config.spacing * -1,
			'margin-right': self.config.spacing * -1
		});

	}


})(jQuery);
/**
 * HSScrollNav Component.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires jQuery
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSScrollNav = {

    /**
     * Base configuraion of the component.
     *
     * @private
     */
    _baseConfig: {
      duration: 400,
      easing: 'linear',
      over: $(),
      activeItemClass: 'active',
      afterShow: function(){},
      beforeShow: function(){}
    },

    /**
     * All initialized item on the page.
     *
     * @private
     */
    _pageCollection: $(),


    /**
     * Initialization of the component.
     *
     * @param {jQuery} collection
     * @param {Object} config
     *
     * @public
     * @return {jQuery}
     */
    init: function(collection, config) {

      var self = this;

      if( !collection || !collection.length ) return $();

      collection.each(function(i, el) {

        var $this = $(el),
            itemConfig = config && $.isPlainObject(config) ?
                         $.extend(true, {}, self._baseConfig, config, $this.data()) :
                         $.extend(true, {}, self._baseConfig, $this.data());

        if( !$this.data('HSScrollNav') ) {

          $this.data('HSScrollNav', new HSScrollNav($this, itemConfig));

          self._pageCollection = self._pageCollection.add( $this );

        }

      });

      $(window).on('scroll.HSScrollNav', function(){

        self._pageCollection.each(function(i, el) {

          $(el).data('HSScrollNav').highlight();

        });

      }).trigger('scroll.HSScrollNav');

      return collection;

    }

  }


  /**
   * HSScrollNav.
   *
   * @param {jQuery} element
   * @param {Object} config
   *
   * @constructor
   */
  function HSScrollNav(element, config) {

    /**
     * Current element.
     *
     * @public
     */
    this.element = element;

    /**
     * Configuraion.
     *
     * @public
     */
    this.config = config;

    /**
     * Sections.
     *
     * @public
     */
    this._items = $();

    this._makeItems();
    this._bindEvents();
  }

  /**
   * Return collection of sections.
   *
   * @private
   * @return {jQuery}
   */
  HSScrollNav.prototype._makeItems = function() {

    var self = this;

    this.element.find('a[href^="#"]').each(function(i, el) {

      var $this = $(el);

      if( !$this.data('HSScrollNavSection') ) {

        $this.data('HSScrollNavSection', new HSScrollNavSection($this, self.config));

        self._items = self._items.add( $this );

      }

    });

  };

  /**
   * Binds necessary events.
   *
   * @private
   * @return {undefined}
   */
  HSScrollNav.prototype._bindEvents = function() {

    var self = this;

    this.element.on('click.HSScrollNav', 'a[href^="#"]', function(e) {

      var link = this;
      self._lockHightlight = true;
      if(self.current) self.current.unhighlight();
      link.blur();
      self.current = $(link).data('HSScrollNavSection');
      self.current.highlight();

      $(this).data('HSScrollNavSection').show( function(){
        self._lockHightlight = false;
      } );

      e.preventDefault();

    });

  };

  /**
   * Activates necessary menu item.
   *
   * @public
   */
  HSScrollNav.prototype.highlight = function() {

    var self = this, items, currentItem, current, scrollTop;

    if(!this._items.length || this._lockHightlight) return;

    scrollTop = $(window).scrollTop();

    if(scrollTop + $(window).height() === $(document).height()) {

      this.current = this._items.last().data('HSScrollNavSection');

      this.unhighlight();
      this.current.highlight();
      this.current.changeHash();

      return;
    }

    this._items.each(function(i, el){

      var Section = $(el).data('HSScrollNavSection'),
          $section = Section.section;

      if(scrollTop > Section.offset) {
        current = Section;
      }

    });

    if(current && this.current != current) {

      this.unhighlight();
      current.highlight();
      if(this.current) current.changeHash();

      this.current = current;

    }

  };

  /**
   * Deactivates all menu items.
   *
   * @public
   */
  HSScrollNav.prototype.unhighlight = function() {

    this._items.each(function(i, el){
      $(el).data('HSScrollNavSection').unhighlight();
    });

  };

  /**
   * HSScrollNavSection.
   *
   * @param {jQuery} element
   *
   * @constructor
   */
  function HSScrollNavSection(element, config) {

    var self = this;

    /**
     * Current section.
     *
     * @public
     */
    this.element = element;

    /**
     * Configuration.
     *
     * @public
     */
    this.config = config;

    /**
     * Getter for acces to the section element.
     *
     * @public
     */
    Object.defineProperty(this, 'section', {
      value: $(self.element.attr('href'))
    });

    /**
     * Getter for determinate position of the section relative to document.
     *
     * @public
     */

    Object.defineProperty(this, 'offset', {
      get: function() {

        var header = $('.u-header'),
            headerStyles = getComputedStyle(header.get(0)),
            headerPosition = headerStyles.position,
            offset = self.section.offset().top;



        if(header.length && headerPosition == 'fixed' && parseInt(headerStyles.top) == 0) {
          offset = offset - header.outerHeight() - parseInt(headerStyles.marginTop);
        }

        if(self.config.over.length) {
          offset = offset - self.config.over.outerHeight();
        }

        return offset;
      }
    });


  }

  /**
   * Moves to the section.
   *
   * @public
   */
  HSScrollNavSection.prototype.show = function(callback) {

    var self = this;

    if( !this.section.length ) return;

    self.config.beforeShow.call(self.section);

    this.changeHash();

    $('html, body').stop().animate({
      scrollTop: self.offset + 3
    }, {
      duration: self.config.duration,
      easing: self.config.easing,
      complete: function() {
        $('html, body').stop().animate({
          scrollTop: self.offset + 3
        }, {
          duration: self.config.duration,
          easing: self.config.easing,
          complete: function() {
            self.config.afterShow.call(self.section);
            if($.isFunction(callback)) callback();
          }
        });
      }
    });

  };

  /**
   * Changes location's hash.
   *
   * @public
   */
  HSScrollNavSection.prototype.changeHash = function() {
    this.section.attr('id', '');
    window.location.hash = this.element.attr('href');
    this.section.attr('id', this.element.attr('href').slice(1));
  };

  /**
   * Activates the menu item.
   *
   * @public
   */
  HSScrollNavSection.prototype.highlight = function() {

    var parent = this.element.parent('li');
    if(parent.length) parent.addClass(this.config.activeItemClass);

  };

  /**
   * Deactivates the menu item.
   *
   * @public
   */
  HSScrollNavSection.prototype.unhighlight = function() {

    var parent = this.element.parent('li');
    if(parent.length) parent.removeClass(this.config.activeItemClass);

  };



})(jQuery);

/**
 * HSScrollBar component.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires malihu jquery custom scrollbar plugin (v3.1.5.)
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSScrollBar = {

    /**
     * Base configuration.
     *
     * @private
     */
    _baseConfig: {
      scrollInertia: 150,
      theme: 'minimal-dark'
    },

    /**
     * Collection of all initalized items on the page.
     *
     * @private
     */
    _pageCollection: $(),


    /**
     * Initialization of HSScrollBar component.
     *
     * @param {jQuery} collection
     * @param {Object} config 
     *
     * @return {jQuery}
     */
    init: function (collection, config) {

      if(!collection || !collection.length) return;

      var self = this;

      config = config && $.isPlainObject(config) ? $.extend(true, {}, config, this._baseConfig) : this._baseConfig;

      return collection.each(function(i, el){

        var $this = $(el),
            scrollBar,
            scrollBarThumb,
            itemConfig = $.extend(true, {}, config, $this.data());


        $this.mCustomScrollbar(itemConfig);

        scrollBar = $this.find('.mCSB_scrollTools');
        scrollBarThumb = $this.find('.mCSB_dragger_bar');

        if(scrollBar.length && $this.data('scroll-classes')) {
          scrollBar.addClass($this.data('scroll-classes'));
        }

        if(scrollBarThumb.length && $this.data('scroll-thumb-classes')) {
          scrollBarThumb.addClass($this.data('scroll-thumb-classes'));
        }

        self._pageCollection = self._pageCollection.add($this);

      });

    },

    /**
     * Destroys the component.
     * 
     * @param {jQuery} collection
     * 
     * @return {jQuery}
     */
    destroy: function( collection ) {

      if( !collection && !collection.length ) return $();

      var _self = this;

      return collection.each(function(i, el){

         var $this = $(el);

         $this.mCustomScrollbar('destroy');

         _self._pageCollection = _self._pageCollection.not( $this );

      });

    }

  }

})(jQuery);

/**
 * Select wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSSelect = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Select wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initSelect();

      return this.pageCollection;

    },

    initSelect: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          searchMaxSelections = $this.data('max-selections'),
          setControlClasses = $this.data('control-classes'),
          setOpenIcon = $this.data('open-icon'),
          setCloseIcon = $this.data('close-icon');

        $this.chosen({
          inherit_select_classes: true,
          max_selected_options: searchMaxSelections ? searchMaxSelections : Infinity,
          disable_search: true
        });

        if (setControlClasses) {
          $this.next().find('.chosen-single div').addClass(setControlClasses);
        }

        if (setOpenIcon) {
          $this.next().find('.chosen-single div b').append('<i class="' + setOpenIcon + '"></i>');

          if (setCloseIcon) {
            $this.next().find('.chosen-single div b').append('<i class="' + setCloseIcon + '"></i>');
          }
        }

        //Actions
        collection = collection.add($this);
      });
    }
  };
})(jQuery);

//Test comment

/**
 * Slider wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSSlider = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      dateFormat: 'dd.mm.yy',
      prevText: '<i class="fa fa-angle-left"></i>',
      nextText: '<i class="fa fa-angle-right"></i>'
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Slider wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initSlider();

      return this.pageCollection;

    },

    initSlider: function () {
      //Variables
      var $self = this,
          config = $self.config,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
            $resultContainer = $this.data('result-container'),
            rangeBoolean = $this.data('range'),
            minVal = $this.data('min'),
            maxVal = $this.data('max'),
            defaultVal = $this.data('default'),
            step = $this.data('step');

        $this.slider({
          range: rangeBoolean == 1 ? true : 'min',
          min: minVal,
          max: maxVal,
          step: step ? step : 1,
          values: rangeBoolean == 1 ? JSON.parse('[' + defaultVal + ']') : false,
          value: defaultVal ? defaultVal : false,
          slide: function (event, ui) {
            if (rangeBoolean == 1) {
              $('#' + $resultContainer).text(ui.values[0] + ' - ' + ui.values[1]);
            } else {
              $('#' + $resultContainer).text(ui.value);
            }
          }
        });

        if (rangeBoolean == 1) {
          $('#' + $resultContainer).text($this.slider('values', 0) + ' - ' + $this.slider('values', 1));
        }

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);

/**
 * SmartMenu component.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function($){
	'use strict';

	$.HSCore.components.HSSmartMenu = {

		/**
		 * Base configuration of the component.
		 *
		 * @var Object _baseConfig
		 */
		_baseConfig : {
			fixMoment: 300,
			togglerSelector: '.u-smart-nav__toggler',
			navbarSelector: '.navbar',
			menuToggleClass: 'u-smart-nav--opened',
			menuVisibleClass: 'u-smart-nav--shown',
			afterOpen: function(){},
			afterClose: function(){}
		},

		/**
		 * Collection of initialized items.
		 *
		 * @var jQuery _pageCollection
		 */
		_pageCollection : $(),

		/**
		 * Initialization of Counter wrapper.
		 *
		 * @param jQuery collection
		 * @param Object config
		 *
		 * @return jQuery
		 */
		init: function(collection, config){

			if(!collection || !collection.length) return $();

			var self = this;

			config = config && $.isPlainObject(config) ? $.extend(true, {}, this._baseConfig, config) : this._baseConfig;

			if(!this.eventInitalized) {

				// init event

				$(window).on('scroll.HSSmartMenu', function(){

					if($(document).height() > $(window).height()) {

						var $w = $(this);

						self._pageCollection.each(function(i,el){

							var $this = $(el),
									SmartMenu = $this.data('HSSmartMenu');

							if( !SmartMenu ) return;
							
							if( $w.scrollTop() >= SmartMenu.getFixMoment() && SmartMenu.isDefaultState() ) {
								SmartMenu.show();
							}
							else if( $w.scrollTop() < SmartMenu.getFixMoment() && !SmartMenu.isDefaultState() ) {
								SmartMenu.hide();
							}

						});

					}

				});		

				this.eventInitalized = true;
			}

			collection.each(function(i,el){

				var $this = $(el);

				if( $this.data('HSSmartMenu') ) return;

				$this.data('HSSmartMenu', new HSSmartMenu($this, $.extend(config, $this.data())));

				self._pageCollection = self._pageCollection.add($this);

			});

			$(window).trigger('scroll.HSSmartMenu');

			if($(document).height() <= $(window).height()) {
				self._pageCollection.each(function(i,el){

					var $this = $(el),
							SmartMenu = $this.data('HSSmartMenu');

					if( !SmartMenu ) return;

					if(SmartMenu.isDefaultState()) SmartMenu.show();

				});
			}

			$(document).on('keyup.HSSmartMenu', function(e){

				if(e.keyCode != 27) return false;

					self._pageCollection.each(function(i,el){
						var $this = $(el),
								SmartMenu = $this.data('HSSmartMenu');


						if( SmartMenu.toggler.length && SmartMenu.toggler.find('.is-active').length ) {
							SmartMenu.toggler.find('.is-active').removeClass('is-active');
						}
						SmartMenu.hideMenu();
					});
			});

			return collection;

		}

	};

	/**
	 * HSSmartMenu Constructor.
	 * 
	 * @param jQuery element
	 * @param Object config
	 */
	function HSSmartMenu(element, config) {

		if(!element || !element.length || !config || !$.isPlainObject(config)) return;

		var self = this;

		this.element = element;
		this.config = config;
		this.defaultState = true;

		this.toggler = this.element.find(this.config.togglerSelector);

		if(this.toggler.length) {
			this.toggler.on('click.HSSmartMenu', function(e){

				if(!self.element.hasClass(self.config.menuToggleClass)) {
					self.openMenu();
				}
				else {
					self.hideMenu();
				}
				e.preventDefault();

			});
		}
	}

	/**
	 * Shows navigation.
	 * 
	 * @public
	 */
	HSSmartMenu.prototype.openMenu = function( ) {

		var toggler = this.toggler ? this.toggler.find('.is-active') : $();

		this.element.addClass(this.config.menuToggleClass);
		if(this.toggler && toggler.length && !toggler.hasClass('is-active')) toggler.addClass('is-active');

	};

	/**
	 * Hides navigation.
	 * 
	 * @public
	 */
	HSSmartMenu.prototype.hideMenu = function() {
		this.element.removeClass(this.config.menuToggleClass);
	};

	/**
	 * Initialization of HSSmartMenu instance.
	 *
	 * @return Object
	 */
	HSSmartMenu.prototype.show = function() {

		this.element.addClass(this.config.menuVisibleClass);

		this.defaultState = false;
		return this;
	}

	/**
	 * Destroy of HSSmartMenu instance.
	 *
	 * @return Object
	 */
	HSSmartMenu.prototype.hide = function() {

		this.element.removeClass(this.config.menuVisibleClass);

		this.defaultState = true;
		return this;
	}

	/**
	 * Returns true if instance is in default state.
	 * 
	 * @return Boolean
	 */
	HSSmartMenu.prototype.isDefaultState = function() {
		return this.defaultState;
	}

	/**
	 * Returns fixe moment.
	 * 
	 * @return Number
	 */
	HSSmartMenu.prototype.getFixMoment = function() {
		return this.config.fixMoment;
	}

})(jQuery);
/**
 * Step form wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSStepForm = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Step form wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initStepForm();

      return this.pageCollection;

    },

    initStepForm: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el);

        var setProgress = function (currstep) {
            var percent;

            percent = parseFloat(100 / widget.length) * currstep;
            percent = percent.toFixed();
            $this.val(percent);
          },
          current = 1,
          widget = $('.js-step'),
          btnNext = $('.js-step-next');

        // Init buttons and UI
        widget.not(':eq(0)').hide();
        setProgress(current);

        // Next button click action
        btnNext.click(function (e) {
          e.preventDefault();

          if (current < widget.length) {
            widget.show();
            widget.not(':eq(' + (current++) + ')').hide();
            setProgress(current);
          }
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);

/**
 * Step form wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSStepForm = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Step form wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initStepForm();

      return this.pageCollection;

    },

    initStepForm: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          progressID = $this.data('progress-id'),
          $progressItems = $(progressID).find('> *'),
          stepsID = $this.data('steps-id'),
          $stepsItems = $(stepsID).find('> *'),
          $stepsActiveItem = $(stepsID).find('> .active');

        $stepsItems.not('.active').hide();
        $progressItems.eq($stepsActiveItem.index()).addClass('active');

        $('[data-next-step]').on('click', function (e) {
          if ((!$(el).valid())) {
            return false;
          }

          e.preventDefault();
          var $this = $(this),
            nextID = $this.data('next-step');

          $progressItems.removeClass('active');
          $progressItems.eq($(nextID).index() - 1).addClass('g-checked');
          $progressItems.eq($(nextID).index()).addClass('active');

          $stepsItems.hide().removeClass('active');
          $(nextID).fadeIn(400).addClass('active');
        });

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);

/**
 * Sticky blocks wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSStickyBlock = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Sticky blocks wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {
      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initStickyBlock();

      return this.pageCollection;
    },

    initStickyBlock: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection,
        windW = $(window).width();

      this.collection.each(function (i, el) {
        //Variables
        var $stickyBlock = $(el),
          type = $stickyBlock.data('type'),
          stickyBlockClasses = $stickyBlock.attr('class').replace($self.config.itemSelector.substring(1), ''),
          stickyBlockH = $stickyBlock.outerHeight(),
          stickyBlockW = $stickyBlock.outerWidth(),
          stickyBlockParentW = $stickyBlock.parent().width(),
          stickyBlockOffsetTop = $stickyBlock.offset().top,
          stickyBlockOffsetLeft = $stickyBlock.offset().left,
          startPoint = $.isNumeric($stickyBlock.data('start-point')) ? $stickyBlock.data('start-point') : $($stickyBlock.data('start-point')).offset().top,
          endPoint = $.isNumeric($stickyBlock.data('end-point')) ? $stickyBlock.data('end-point') : $($stickyBlock.data('end-point')).offset().top,
          hasStickyHeader = $stickyBlock.data('has-sticky-header');

        //Break function if there are no target element
        if (!$stickyBlock.length) return;

        $self.resolutionCheck($stickyBlock);

        if ($stickyBlock.hasClass('g-sticky-block--sm') && windW <= 576) {
          $stickyBlock.addClass('die-sticky');
          $self.resolutionCheck($stickyBlock);
        } else if ($stickyBlock.hasClass('g-sticky-block--md') && windW <= 768) {
          $stickyBlock.addClass('die-sticky');
          $self.resolutionCheck($stickyBlock);
        } else if ($stickyBlock.hasClass('g-sticky-block--lg') && windW <= 992) {
          $stickyBlock.addClass('die-sticky');
          $self.resolutionCheck($stickyBlock);
        } else if ($stickyBlock.hasClass('g-sticky-block--xl') && windW <= 1200) {
          $stickyBlock.addClass('die-sticky');
          $self.resolutionCheck($stickyBlock);
        } else {
          $stickyBlock.removeClass('die-sticky');
        }

        $(window).on('resize', function () {
          var windW = $(window).width();

          if ($stickyBlock.hasClass('g-sticky-block--sm') && windW <= 576) {
            $stickyBlock.addClass('die-sticky');
            $self.resolutionCheck($stickyBlock);
          } else if ($stickyBlock.hasClass('g-sticky-block--md') && windW <= 768) {
            $stickyBlock.addClass('die-sticky');
            $self.resolutionCheck($stickyBlock);
          } else if ($stickyBlock.hasClass('g-sticky-block--lg') && windW <= 992) {
            $stickyBlock.addClass('die-sticky');
            $self.resolutionCheck($stickyBlock);
          } else if ($stickyBlock.hasClass('g-sticky-block--xl') && windW <= 1200) {
            $stickyBlock.addClass('die-sticky');
            $self.resolutionCheck($stickyBlock);
          } else {
            $stickyBlock
              .removeClass('die-sticky')
              .css({
                'top': '',
                'left': ''
              });
          }

          if (type == 'responsive') {
            setTimeout(function () {
              var offsetTop = $(this).scrollTop(),
                headerH = $('header').outerHeight();
              stickyBlockH = $stickyBlock.outerHeight(),
                stickyBlockParentW = $stickyBlock.parent().width(),
                stickyBlockOffsetTop = $stickyBlock.parent().offset().top,
                stickyBlockOffsetLeft = $stickyBlock.parent().offset().left + parseInt($stickyBlock.parent().css('padding-left')),
                startPoint = $.isNumeric($stickyBlock.data('start-point')) ? $stickyBlock.data('start-point') : $($stickyBlock.data('start-point')).offset().top,
                endPoint = $.isNumeric($stickyBlock.data('end-point')) ? $stickyBlock.data('end-point') : $($stickyBlock.data('end-point')).offset().top;

              if (hasStickyHeader === true) {
                $stickyBlock
                  .not('.die-sticky')
                  .css({
                    'top': offsetTop + headerH >= (endPoint - stickyBlockH) ? endPoint - stickyBlockH - stickyBlockOffsetTop : headerH,
                    'left': stickyBlockOffsetLeft,
                    'width': stickyBlockParentW
                  });

                // if (offsetTop + headerH <= (endPoint - stickyBlockH)) {
                //   $stickyBlock
                //     .not('.die-sticky')
                //     .addClass('g-pos-fix g-m-reset');
                // }
              } else {
                $stickyBlock
                  .not('.die-sticky')
                  .css({
                    'top': offsetTop >= (endPoint - stickyBlockH) ? endPoint - stickyBlockH - stickyBlockOffsetTop : 0,
                    'left': stickyBlockOffsetLeft,
                    'width': stickyBlockParentW
                  });

                // if (offsetTop <= (endPoint - stickyBlockH)) {
                //   $stickyBlock
                //     .not('.die-sticky')
                //     .addClass('g-pos-fix g-m-reset');
                // }
              }
            }, 400);
          }
        });

        if (type != 'responsive') {
          //Add "shadow" element
          var offsetTop = $(this).scrollTop();

          /* Args:
           * [1: target element]
           * [2: window offset top]
           * [3: target element height]
           * [4: target element width]
           * [5: target element index]
           * [6: target element classes (exclude init class)]
           * [7: start point]
           * [8: end point]
           */
          $self.addShadow($stickyBlock, offsetTop, stickyBlockH, stickyBlockW, i, stickyBlockClasses, startPoint, endPoint, hasStickyHeader);

          //Add sticky state
          /* Args:
           * [1: target element]
           * [2: window offset top]
           * [3: target element height]
           * [4: target element width]
           * [5: target offset left]
           * [6: start point]
           * [7: end point]
           */
          $self.addSticky($stickyBlock, offsetTop, stickyBlockH, stickyBlockW, stickyBlockOffsetLeft, startPoint, endPoint, hasStickyHeader);
        } else {
          //Add responsive sticky state
          var offsetTop = $(this).scrollTop();

          /* Args:
           * [1: target element]
           * [2: window offset top]
           * [3: parent element height]
           * [4: parent element width]
           * [5: target offset left]
           * [6: start point]
           * [7: end point]
           */
          $self.addSticky($stickyBlock, offsetTop, 'auto', stickyBlockParentW, stickyBlockOffsetLeft, startPoint, endPoint, hasStickyHeader);
        }

        $(window).on('scroll', function () {
          var offsetTop = $(this).scrollTop();

          if (type != 'responsive') {
            //Add "shadow" element
            /* Args:
             * [1: target element]
             * [2: window offset top]
             * [3: target element height]
             * [4: target element width]
             * [5: target element index]
             * [6: target element classes (exclude init class)]
             * [7: start point]
             * [8: end point]
             */
            $self.addShadow($stickyBlock, offsetTop, stickyBlockH, stickyBlockW, i, stickyBlockClasses, startPoint, endPoint, hasStickyHeader);

            //Add sticky state
            /* Args:
             * [1: target element]
             * [2: window offset top]
             * [3: target element height]
             * [4: target element width]
             * [5: target offset left]
             * [6: start point]
             * [7: end point]
             */
            $self.addSticky($stickyBlock, offsetTop, stickyBlockH, stickyBlockW, stickyBlockOffsetLeft, startPoint, endPoint, hasStickyHeader);
          } else {
            //Add responsive sticky state
            /* Args:
             * [1: target element]
             * [2: window offset top]
             * [3: parent element height]
             * [4: parent element width]
             * [5: target offset left]
             * [6: start point]
             * [7: end point]
             */
            $self.addSticky($stickyBlock, offsetTop, 'auto', stickyBlockParentW, stickyBlockOffsetLeft, startPoint, endPoint, hasStickyHeader);
          }

          //Remove sticky state
          /* Args:
           * [1: target element]
           * [2: window offset top]
           * [3: start point]
           */
          $self.removeSticky($stickyBlock, offsetTop, startPoint, hasStickyHeader);

          if (endPoint) {
            //Add absolute state
            /* Args:
             * [1: target element]
             * [2: target element height]
             * [3: target element index]
             * [4: target offset top]
             * [5: window offset top]
             * [6: end point]
             */

            $self.addAbsolute($stickyBlock, stickyBlockH, i, stickyBlockOffsetTop, offsetTop, endPoint, hasStickyHeader);
          }
        });

        $(window).trigger('scroll');

        //Add object to collection
        collection = collection.add($stickyBlock);
      });
    },

    addSticky: function (target, offsetTop, targetH, targetW, offsetLeft, startPoint, endPoint, hasStickyHeader) {
      if (hasStickyHeader === true) {
        var headerH = $('header').outerHeight();

        if (offsetTop + headerH >= startPoint && offsetTop + headerH < endPoint) {
          target
            .not('.die-sticky')
            .removeClass('g-pos-rel')
            .css({
              'top': '',
              'left': '',
              'width': '',
              'height': ''
            })
            .addClass('g-pos-fix g-m-reset')
            .css({
              'top': headerH,
              'left': offsetLeft,
              'width': targetW,
              'height': targetH
            });
        }
      } else {
        if (offsetTop >= startPoint && offsetTop < endPoint) {
          target
            .not('.die-sticky')
            .removeClass('g-pos-rel')
            .css({
              'top': '',
              'left': '',
              'width': '',
              'height': ''
            })
            .addClass('g-pos-fix g-m-reset')
            .css({
              'top': 0,
              'left': offsetLeft,
              'width': targetW,
              'height': targetH
            });
        }
      }
    },

    removeSticky: function (target, offsetTop, startPoint, hasStickyHeader) {
      if (hasStickyHeader === true) {
        var headerH = $('header').outerHeight();

        if (offsetTop + headerH <= startPoint) {
          target
            .not('.die-sticky')
            .removeClass('g-pos-fix g-m-reset')
            .css({
              'left': ''
            });
        }
      } else {
        if (offsetTop <= startPoint) {
          target
            .not('.die-sticky')
            .removeClass('g-pos-fix g-m-reset')
            .css({
              'left': ''
            });
        }
      }
    },

    addAbsolute: function (target, targetH, targetI, targetOffsetTop, offsetTop, endPoint, hasStickyHeader) {
      if (target.hasClass('g-pos-rel')) return;

      if (hasStickyHeader === true) {
        var headerH = $('header').outerHeight();

        if (offsetTop + headerH >= endPoint - targetH) {
          target
            .not('.die-sticky')
            .removeClass('g-pos-fix g-m-reset')
            .addClass('g-pos-rel')
            .css({
              'top': endPoint - targetH - targetOffsetTop,
              'left': ''
            });
        }
      } else {
        if (offsetTop >= endPoint - targetH) {
          target
            .not('.die-sticky')
            .removeClass('g-pos-fix g-m-reset')
            .addClass('g-pos-rel')
            .css({
              'top': endPoint - targetH - targetOffsetTop,
              'left': ''
            });
        }
      }
    },

    addShadow: function (target, offsetTop, targetH, targetW, targetI, targetClasses, startPoint, endPoint, hasStickyHeader) {
      if (hasStickyHeader === true) {
        var headerH = $('header').outerHeight();

        if (offsetTop + headerH > startPoint && offsetTop + headerH < (endPoint - targetH)) {
          if ($('#shadow' + targetI).length) return;

          //Add shadow block
          target
            .not('.die-sticky')
            .before('<div id="shadow' + targetI + '" class="' + targetClasses + '" style="height: ' + targetH + 'px; width: ' + targetW + 'px"></div>');
        } else {
          if (!$('#shadow' + targetI).length) return;

          //Remove shadow block
          $('#shadow' + targetI).remove();
        }
      } else {
        if (offsetTop > startPoint && offsetTop < (endPoint - targetH)) {
          if ($('#shadow' + targetI).length) return;

          //Add shadow block
          target
            .not('.die-sticky')
            .before('<div id="shadow' + targetI + '" class="' + targetClasses + '" style="height: ' + targetH + 'px; width: ' + targetW + 'px"></div>');
        } else {
          if (!$('#shadow' + targetI).length) return;

          //Remove shadow block
          $('#shadow' + targetI).remove();
        }
      }
    },

    resolutionCheck: function (target) {
      target
        .removeClass('g-pos-fix g-m-reset')
        .css({
          'top': '',
          'left': '',
          'width': '',
          'height': ''
        });
    }
  }
})(jQuery);

/**
 * Tabs wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSTabs = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Tabs wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initTabs();

      return this.pageCollection;

    },

    initTabs: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var windW = $(window).width(),
          //Tabs
          $tabs = $(el),
          $tabsItem = $tabs.find('.nav-item'),
          tabsType = $tabs.data('tabs-mobile-type'), //[slide-up-down], [accordion], [hide-extra-items]
          controlClasses = $tabs.data('btn-classes'),
          context = $tabs.parent(),

          //Tabs Content
          $tabsContent = $('#' + $tabs.data('target')),
          $tabsContentItem = $tabsContent.find('.tab-pane');

        if (windW < 767) {
          $('body').on('click', function () {
            if (tabsType) {
              $tabs.slideUp(200);
            } else {
              $tabs.find('.nav-inner').slideUp(200);
            }
          });
        } else {
          $('body').off('click');
        }

        if (windW > 767 && tabsType) {
          $tabs.removeAttr('style');
          $tabsContentItem.removeAttr('style');
          context.off('click', '.js-tabs-mobile-control');
          context.off('click', '[role="tab"]');
          if (tabsType == 'accordion') {
            $tabsContent.find('.js-tabs-mobile-control').remove();
          } else {
            context.find('.js-tabs-mobile-control').remove();
          }
          return;
        }

        if (windW < 768 && tabsType == 'accordion') {
          $self.accordionEffect($tabsContent, $tabsItem, $tabsContentItem, controlClasses);
        } else if (windW < 768 && tabsType == 'slide-up-down') {
          $self.slideUpDownEffect(context, $tabs, controlClasses);
        }

        //Actions
        collection = collection.add($tabs);
      });
    },

    slideUpDownEffect: function (context, menu, btnClasses) {
      if (context.find('.js-tabs-mobile-control').length) return;

      //Create control
      var activeItemHTML = menu.find('.active').html();

      $(menu).before('<a class="js-tabs-mobile-control ' + btnClasses + '" href="#">' + activeItemHTML + '</a>');

      /*----- CLICK -----*/
      context.on('click', '.js-tabs-mobile-control', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(menu).slideToggle(200);
      });

      context.on('click', '[role="tab"]', function (e) {
        e.preventDefault();

        var thisHTML = $(this).html(),
          $targetControl = $(this).closest('ul').prev('.js-tabs-mobile-control');

        $targetControl.html(thisHTML);
        $(menu).slideUp(200);
      });
    },

    accordionEffect: function (context, menuItem, menu, btnClasses) {
      if (context.find('.js-tabs-mobile-control').length) return;

      //Create control
      $(menu).before('<a class="js-tabs-mobile-control ' + btnClasses + '" href="#"></a>');

      menuItem.each(function () {
        var thisIndex = $(this).index(),
          thisHTML = $(this).find('[role="tab"]').html();

        if ($(this).find('[role="tab"]').hasClass('active')) {
          $(menu[thisIndex]).prev().addClass('active');
        }

        $(menu[thisIndex]).prev().html(thisHTML);
      });

      /*----- CLICK -----*/
      context.on('click', '.js-tabs-mobile-control', function (e) {
        e.preventDefault();

        if ($(this).hasClass('active')) return;

        var contextID = context.attr('id');

        context.find('.js-tabs-mobile-control').removeClass('active');
        console.log(contextID);
        $('[data-target="' + contextID + '"]').find('.nav-link').removeClass('active');
        var $target = $(this).next(),
          targetID = $target.attr('id');

        if ($target.hasClass('fade')) {
          $(this).addClass('active');
          $('[href="#' + targetID + '"]').addClass('active');

          $(menu)
            .slideUp(200);
          $target
            .slideDown(200, function () {
              context.find('[role="tabpanel"]').removeClass('show active');
              $target.addClass('show active');
            });
        } else {
          $(this).addClass('active');
          $(menu).slideUp(200);
          $target.slideDown(200);
        }
      });
    }
  }

})(jQuery);

/**
 * Twitter wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSTwitter = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      dateFormat: '%b. %d, %Y',
      template: '<div class="js-slide">' +
      '<blockquote class="g-font-size-18 g-mb-10--xs">' +
      '{{tweet}}' +
      '</blockquote>' +
      '<h4 class="g-font-size-18 g-mb-10--xs">' +
      '<a class="g-color-primary" href="https://twitter.com/{{screen_name}}">' +
      '@{{screen_name}}' +
      '</a>' +
      '</h4>' +
      '<ul class="list-inline g-font-size-18 g-mb-0--xs">' +
      '<li class="list-inline-item g-px-5--xs">' +
      '<a href="https://twitter.com/intent/tweet?in_reply_to={{tweet_id}}">' +
      '<i class="fa fa-reply"></i>' +
      '</a>' +
      '</li>' +
      '<li class="list-inline-item g-px-5--xs">' +
      '<a href="https://twitter.com/intent/retweet?tweet_id={{tweet_id}}">' +
      '<i class="fa fa-retweet"></i>' +
      '</a>' +
      '</li>' +
      '<li class="list-inline-item g-px-5--xs">' +
      '<a href="https://twitter.com/intent/like?tweet_id={{tweet_id}}">' +
      '<i class="fa fa-star"></i>' +
      '</a>' +
      '</li>' +
      '</ul>' +
      '</div>'
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Twitter wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config, callback) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.callback = callback;

      this.twitterInit();

      return this.pageCollection;

    },

    twitterInit: function () {
      //Variables
      var $self, config, collection, callback;
      //Variables values
      $self = this;
      config = $self.config;
      collection = $self.pageCollection;
      callback = $self.callback;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this;
        //Variables values
        $this = $(el);

        $this.twittie({
          dateFormat: config['dateFormat'],
          template: config['template']
        }, callback);

        //Actions
        collection = collection.add($this);
      });
    }

  }

})(jQuery);

/**
 * Validation wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSValidation = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Validation wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initValidation();

      return this.pageCollection;

    },

    initValidation: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el);

        if($this.hasClass('js-step-form')) {
          $.validator.setDefaults({
            ignore: ':hidden:not(.active select)'
          });
        } else {
          $.validator.setDefaults({
            ignore: ':hidden:not(select)'
          });
        }

        $this.validate({
          errorPlacement: $self.errorPlacement,
          highlight: $self.highlight,
          unhighlight: $self.unHighlight
        });

        $('select').change(function(){
          $(this).valid();
        });

        //Actions
        collection = collection.add($this);
      });
    },

    errorPlacement: function (error, element) {
      var $this = $(element),
        errorMsgClasses = $this.data('msg-classes');

      error.addClass(errorMsgClasses);
      error.appendTo(element.parents('.form-group'));
    },

    highlight: function (element) {
      var $this = $(element),
        errorClass = $this.data('error-class');

      $this.parents('.form-group').addClass(errorClass);
    },

    unHighlight: function (element) {
      var $this = $(element),
        errorClass = $this.data('error-class'),
        successClass = $this.data('success-class');

      $this.parents('.form-group').removeClass(errorClass).addClass(successClass);
    }

  };

})(jQuery);

/**
 * Video and audio wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSVideoAudio = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Video and audio wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initVideoAudio();

      return this.pageCollection;

    },

    initVideoAudio: function () {
      //Variables
      var $self = this,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $videoAudio = el;

        plyr.setup($videoAudio);

        //Add object to collection
        collection = collection.add($videoAudio);
      });
    }
  }

})(jQuery);

/**
 * Gmap wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSGMap = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      zoom: 14,
      scrollwheel: false
    },

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Gmap wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initGMap();

      return this.pageCollection;

    },

    initGMap: function () {
      //Variables
      var $self = this,
        config = $self.config,
        collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          ID = $this.attr('id'),
          gMapType = $this.data('type'),
          gMapLat = $this.data('lat'),
          gMapLng = $this.data('lng'),
          gMapZoom = $this.data('zoom'),
          gMapTitle = $this.data('title'),

          gMapStyles = JSON.parse(el.getAttribute('data-styles')),
          gMapStylesArray = [],

          polygon,
          gMapPolygon = Boolean($this.data('polygon')),
          gMapPolygonCords = JSON.parse(el.getAttribute('data-polygon-cords')),
          gMapPolygonStyles = JSON.parse(el.getAttribute('data-polygon-styles')),

          polylines,
          gMapPolylines = Boolean($this.data('polylines')),
          gMapPolylinesCords = JSON.parse(el.getAttribute('data-polylines-cords')),
          gMapPolylinesStyles = JSON.parse(el.getAttribute('data-polylines-styles')),

          gMapRoutes = Boolean($this.data('routes')),
          gMapRoutesCords = JSON.parse(el.getAttribute('data-routes-cords')),
          gMapRoutesStyles = JSON.parse(el.getAttribute('data-routes-styles')),

          gMapGeolocation = Boolean($this.data('geolocation')),

          gMapGeocoding = Boolean($this.data('geocoding')),
          gMapCordsTarget = $this.data('cords-target'),

          gMapPin = Boolean($this.data('pin')),
          gMapPinIcon = $this.data('pin-icon'),

          $gMap;

        //Map Type
        if (gMapType == 'satellite') {
          $gMap = new google.maps.Map(document.getElementById(ID), {
            zoom: gMapZoom ? gMapZoom : config['zoom'],
            scrollwheel: config['scrollwheel']
          });

          $gMap.setCenter({
            lat: gMapLat,
            lng: gMapLng
          });

          $gMap.setMapTypeId(google.maps.MapTypeId.SATELLITE);
        } else if (gMapType == 'terrain') {
          $gMap = new google.maps.Map(document.getElementById(ID), {
            zoom: gMapZoom ? gMapZoom : config['zoom'],
            scrollwheel: config['scrollwheel']
          });

          $gMap.setCenter({
            lat: gMapLat,
            lng: gMapLng
          });

          $gMap.setMapTypeId(google.maps.MapTypeId.TERRAIN);
        } else if (gMapType == 'street-view') {
          $gMap = new google.maps.StreetViewPanorama(document.getElementById(ID), {
            zoom: gMapZoom ? gMapZoom : config['zoom'],
            scrollwheel: config['scrollwheel']
          });

          $gMap.setPosition({
            lat: gMapLat,
            lng: gMapLng
          });
        } else if (gMapType == 'static') {
          $(document).ready(function () {
            $gMap = GMaps.staticMapURL({
              size: [2048, 2048],
              lat: gMapLat,
              lng: gMapLng,
              zoom: gMapZoom ? gMapZoom : config['zoom']
            });

            $('#' + ID).css('background-image', 'url(' + $gMap + ')');
          });
        } else if (gMapType == 'custom') {
          var arrL = gMapStyles.length;

          for (var i = 0; i < arrL; i++) {
            var featureType = gMapStyles[i][0],
              elementType = gMapStyles[i][1],
              stylers = gMapStyles[i][2],
              obj = $.extend({}, gMapStylesArray[i]);

            if (featureType != "") {
              obj.featureType = featureType;
            }

            if (elementType != "") {
              obj.elementType = elementType;
            }

            obj.stylers = stylers;

            gMapStylesArray.push(obj);
          }

          $gMap = new GMaps({
            div: '#' + ID,
            lat: gMapLat,
            lng: gMapLng,
            zoom: gMapZoom ? gMapZoom : config['zoom'],
            scrollwheel: config['scrollwheel'],
            styles: gMapStylesArray
          });

          //Pin
          if (gMapPin) {
            $gMap.addMarker({
              lat: gMapLat,
              lng: gMapLng,
              title: gMapTitle,
              icon: gMapPinIcon
            });
          }
          //End Pin
        } else {
          $gMap = new GMaps({
            div: '#' + ID,
            lat: gMapLat,
            lng: gMapLng,
            zoom: gMapZoom ? gMapZoom : config['zoom'],
            scrollwheel: config['scrollwheel']
          });

          //Pin
          if (gMapPin) {
            $gMap.addMarker({
              lat: gMapLat,
              lng: gMapLng,
              title: gMapTitle,
              icon: gMapPinIcon
            });
          }
          //End Pin
        }
        //End Map Type

        //Pin
        if (gMapPin && gMapType == 'satellite' || gMapType == 'terrain' || gMapType == 'street-view') {
          //Variables
          var $pin = new google.maps.Marker({
            position: {
              lat: gMapLat,
              lng: gMapLng
            },
            map: $gMap
          });

          if (gMapPinIcon) {
            var $pinIcon = new google.maps.MarkerImage(gMapPinIcon);
            $pin.setIcon($pinIcon);
          }

          if (gMapTitle) {
            $pin.setOptions({
              title: gMapTitle
            });
          }
        }
        //End Pin

        //Auto Center markers on window resize
        if (!gMapGeolocation) {
          google.maps.event.addDomListener(window, 'resize', function () {
            setTimeout(function () {
              $gMap.setCenter({
                lat: gMapLat,
                lng: gMapLng
              });
            }, 100);
          });
        }

        //Polygon
        if (gMapPolygon) {
          $(document).ready(function () {
            polygon = $gMap.drawPolygon({
              paths: gMapPolygonCords,
              strokeColor: gMapPolygonStyles.strokeColor,
              strokeOpacity: gMapPolygonStyles.strokeOpacity,
              strokeWeight: gMapPolygonStyles.strokeWeight,
              fillColor: gMapPolygonStyles.fillColor,
              fillOpacity: gMapPolygonStyles.fillOpacity
            });
          });
        }
        //End Polygon

        //Polylines
        if (gMapPolylines) {
          $(document).ready(function () {
            $gMap.drawPolyline({
              path: gMapPolylinesCords,
              strokeColor: gMapPolylinesStyles.strokeColor,
              strokeOpacity: gMapPolylinesStyles.strokeOpacity,
              strokeWeight: gMapPolylinesStyles.strokeWeight
            });
          });
        }
        //End Polylines

        //Routes
        if (gMapRoutes) {
          $(document).ready(function () {
            $gMap.drawRoute({
              origin: gMapRoutesCords[0],
              destination: gMapRoutesCords[1],
              travelMode: gMapRoutesStyles.travelMode,
              strokeColor: gMapRoutesStyles.strokeColor,
              strokeOpacity: gMapRoutesStyles.strokeOpacity,
              strokeWeight: gMapRoutesStyles.strokeWeight
            });
          });
        }
        //End Routes

        //Geolocation
        if (gMapGeolocation) {
          GMaps.geolocate({
            success: function (position) {
              $gMap.setCenter({
                lat: position.coords.latitude,
                lng: position.coords.longitude
              });

              google.maps.event.addDomListener(window, 'resize', function () {
                setTimeout(function () {
                  $gMap.setCenter({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                  });
                }, 100);
              });
            },
            error: function (error) {
              alert('Geolocation failed: ' + error.message);
            },
            not_supported: function () {
              alert('Your browser does not support geolocation');
            }
          });
        }
        //End Geolocation

        //Geocoding
        if (gMapGeocoding) {
          $(document).ready(function () {
            var targetCordsParent = $(gMapCordsTarget).closest('form');

            $(targetCordsParent).submit(function (e) {
              e.preventDefault();

              GMaps.geocode({
                address: $(gMapCordsTarget).val().trim(),
                callback: function (results, status) {
                  if (status == 'OK') {
                    var latlng = results[0].geometry.location;

                    $gMap.setCenter(latlng.lat(), latlng.lng());
                    $gMap.addMarker({
                      lat: latlng.lat(),
                      lng: latlng.lng()
                    });
                  }
                }
              });
            });
          });
        }
        //End Geocoding

        //Actions
        collection = collection.add($this);
      });
    }
  }
})(jQuery);

/**
 * Text Slideshow wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 * @requires charming.js, anime.js, textfx.js
 *
 */
;
(function($) {
  'use strict';

  $.HSCore.components.HSTextSlideshow = {

    /**
     * Base configuration.
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
      autoplay: false,
      autoplayDelay: 3000,
      slideSelector: '.u-text-slideshow__slide',
      activeSlideClass: 'u-text-slideshow__slide--current',
      slideTargetSelector: '.u-text-slideshow__slide-target'
    },

    /**
     * Collection of all instances of the page.
     *
     * @var jQuery _pageCollection
     */
    _pageCollection: $(),


    /**
     * Initialization of Slideshow.
     *
     * @param jQuery collection (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */
    init: function(collection, config) {

      if(!collection || !collection.length) return this._pageCollection;

      var self = this;

      config = config && $.isPlainObject(config) ? $.extend(true, {}, this._baseConfig, config) : this._baseConfig;


      collection.each(function(i, el){

        var $this = $(this);

        if(!$this.data('HSTextSlideshow')) {

          $this.data('HSTextSlideshow', new HSTextSlideshow($this, $.extend(true, {}, config, {
            effect: $this.data('effect') ? $this.data('effect') : 'fx1'
          })));
          self._pageCollection = self._pageCollection.add($this);

        }


      });

      return this._pageCollection;
    }

  }

  /**
   * Constructor function of Slideshow.
   *
   * @param jQuery element
   * @param Object config
   *
   * @return undefined
   */
  function HSTextSlideshow(element, config) {
    this.config = config && $.isPlainObject(config) ? config : {};

    this.element = element;

    this.config = $.extend(true, {}, this.config, this.element.data() );

    var jCurrentSlide = this.element.find('.' + this.config.activeSlideClass);

    this.currentIndex = this.config.currentIndex = jCurrentSlide.length ? jCurrentSlide.index() : 0;

    this.slides = [];

    if( this.element.attr('id') ) this._initNavigation();

    this._initSlides();

    if( this.config.autoplay ) {
      this._autoplayStart();
    }
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype._initSlides = function() {

    var self = this,
        jSlides = this.element.find(this.config.slideSelector);

    if(jSlides.length) {
      jSlides.each(function(i, el){

        self.addSlide( $(el), self.config );

      });
    }

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype._updateCarouselBounds = function() {

    var self = this;

    this.element.stop().animate({
      'width': self.slides[self.currentIndex].getElement().outerWidth() + 1
    }, {
      duration: 300,
      easing: 'linear'
    });

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype._autoplayStart = function() {

    var self = this;

    this.autoplayTimeoutId = setTimeout( function autoplay() {

      self.next();

      self.autoplayTimeoutId = setTimeout( autoplay, self.config.autoplayDelay );

    }, this.config.autoplayDelay );

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype._autoplayStop = function() {

    clearTimeout( this.autoplayTimeoutId );

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype._initNavigation = function() {

    var self = this,
        navElements = $( '[data-target="#'+this.element.attr('id')+'"]' );

    navElements.on('click', function(e){

      var $this = $(this);

      if( $this.data('action').toUpperCase() == 'PREV' ) {
        if( self.config.autoplay ) {
          self._autoplayStop();
          self._autoplayStart();
        }
        self.prev();
      }
      else if( $this.data('action').toUpperCase() == 'NEXT' ) {
        if( self.config.autoplay ) {
          self._autoplayStop();
          self._autoplayStart();
        }
        self.next();
      }

      e.preventDefault();
    });

    navElements.each(function(i, el){

      var $this = $(el);

      if( $this.data('action') ) {
        self['_initAction' + $this.data('action').toUpperCase( $this )];
      }

    });

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype.addSlide = function(element, config) {

    if(!element || !element.length) return;
    this.slides.push( new HSTextSlide( element, config ) );

  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype.next = function() {

    if(this.slides.length <= 1) return;

    this.slides[this.currentIndex].hide();

    this.currentIndex++;

    if(this.currentIndex > this.slides.length - 1) this.currentIndex = 0;

    this._updateCarouselBounds();
    this.slides[this.currentIndex].show();
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlideshow.prototype.prev = function() {

    if(this.slides.length <= 1) return;

    this.slides[this.currentIndex].hide();

    this.currentIndex--;

    if(this.currentIndex < 0) this.currentIndex = this.slides.length - 1;

    this._updateCarouselBounds();
    this.slides[this.currentIndex].show();
  }


  /**
   * Constructor function of Slide.
   *
   * @param jQuery element
   *
   * @return undefined
   */
  function HSTextSlide(element, config) {
    this.element = element;
    this.config = config;

    this.target = element.find( config.slideTargetSelector ).get(0);

    if(!this.target) return;

    this.textfx = new TextFx( this.target );

    if( this.config.currentIndex != this.element.index() ) {
      $(this.target).find('[class*="letter"]').css( this.textfx.effects[config.effect].out );
    }
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlide.prototype.show = function() {
    if(!this.target) return;

    this.element.addClass(this.config.activeSlideClass);

    this.textfx.show(this.config.effect);
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlide.prototype.hide = function() {
    if(!this.target) return;

    this.element.removeClass(this.config.activeSlideClass);

    this.textfx.hide(this.config.effect);
  }

  /**
   *
   *
   * @param
   *
   * @return
   */
  HSTextSlide.prototype.getElement = function() {

    return this.element;

  }

})(jQuery);

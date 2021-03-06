// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

(function($) {
  $.fn.menuAim = function(opts) {
    this.each(function() {
      init.call(this, opts);
    });
    return this;
  };

  function init(opts) {
    var $menu = $(this),
      activeRow = null,
      mouseLocs = [],
      lastDelayLoc = null,
      timeoutId = null,
      options = $.extend({
        rowSelector: "> li",
        submenuSelector: "*",
        submenuDirection: "right",
        tolerance: 500,
        enter: $.noop,
        exit: $.noop,
        activate: $.noop,
        deactivate: $.noop,
        exitMenu: $.noop
      }, opts);
    var MOUSE_LOCS_TRACKED = 3,
      DELAY = 300;
    var mousemoveDocument = function(e) {
      mouseLocs.push({
        x: e.pageX,
        y: e.pageY
      });
      if (mouseLocs.length > MOUSE_LOCS_TRACKED) {
        mouseLocs.shift();
      }
    };
    var mouseleaveMenu = function() {
      if (timeoutId) {
        clearTimeout(timeoutId);
      }
      if (options.exitMenu(this)) {
        if (activeRow) {
          options.deactivate(activeRow);
        }
        activeRow = null;
      }
    };
    var mouseenterRow = function() {
        if (timeoutId) {
          clearTimeout(timeoutId);
        }
        options.enter(this);
        possiblyActivate(this);
      },
      mouseleaveRow = function() {
        options.exit(this);
      };
    var clickRow = function() {
      activate(this);
    };
    var activate = function(row) {
      if (row == activeRow) {
        return;
      }
      if (activeRow) {
        options.deactivate(activeRow);
      }
      options.activate(row);
      activeRow = row;
    };
    var possiblyActivate = function(row) {
      var delay = activationDelay();
      if (delay) {
        timeoutId = setTimeout(function() {
          possiblyActivate(row);
        }, delay);
      } else {
        activate(row);
      }
    };
    var activationDelay = function() {
      if (!activeRow || !$(activeRow).is(options.submenuSelector)) {
        return 0;
      }
      var offset = $menu.offset(),
        upperLeft = {
          x: offset.left,
          y: offset.top - options.tolerance
        },
        upperRight = {
          x: offset.left + $menu.outerWidth(),
          y: upperLeft.y
        },
        lowerLeft = {
          x: offset.left,
          y: offset.top + $menu.outerHeight() + options.tolerance
        },
        lowerRight = {
          x: offset.left + $menu.outerWidth(),
          y: lowerLeft.y
        },
        loc = mouseLocs[mouseLocs.length - 1],
        prevLoc = mouseLocs[0];
      if (!loc) {
        return 0;
      }
      if (!prevLoc) {
        prevLoc = loc;
      }
      if (prevLoc.x < offset.left || prevLoc.x > lowerRight.x || prevLoc.y < offset.top || prevLoc.y > lowerRight.y) {
        return 0;
      }
      if (lastDelayLoc && loc.x == lastDelayLoc.x && loc.y == lastDelayLoc.y) {
        return 0;
      }

      function slope(a, b) {
        return (b.y - a.y) / (b.x - a.x);
      };
      var decreasingCorner = upperRight,
        increasingCorner = lowerRight;
      if (options.submenuDirection == "left") {
        decreasingCorner = lowerLeft;
        increasingCorner = upperLeft;
      } else if (options.submenuDirection == "below") {
        decreasingCorner = lowerRight;
        increasingCorner = lowerLeft;
      } else if (options.submenuDirection == "above") {
        decreasingCorner = upperLeft;
        increasingCorner = upperRight;
      }
      var decreasingSlope = slope(loc, decreasingCorner),
        increasingSlope = slope(loc, increasingCorner),
        prevDecreasingSlope = slope(prevLoc, decreasingCorner),
        prevIncreasingSlope = slope(prevLoc, increasingCorner);
      if (decreasingSlope < prevDecreasingSlope && increasingSlope > prevIncreasingSlope) {
        lastDelayLoc = loc;
        return DELAY;
      }
      lastDelayLoc = null;
      return 0;
    };
    $menu.mouseleave(mouseleaveMenu).find(options.rowSelector).mouseenter(mouseenterRow).mouseleave(mouseleaveRow).click(clickRow);
    $(document).mousemove(mousemoveDocument);
  };
})(jQuery);
$(document).ready(function() {
  var $mainMenu = $('.primary-list');
  var $menu = $('.dropdown-menu');
  $menu.menuAim({
    activate: activateSubmenu,
    deactivate: deactivateSubmenu
  });

  function activateSubmenu(row) {
    var $row = $(row),
      submenuID = $row.data('submenuId'),
      submenuEl = $row.find('#' + submenuID);
    submenuEl.css({
      display: 'block',
      top: 12,
      left: 240,
      bottom: 0
    });
    $row.find("a.first-level-link").addClass('maintainHover');
  }

  function deactivateSubmenu(row) {
    var $row = $(row),
      submenuID = $row.data('submenuId'),
      submenuEl = $row.find('#' + submenuID);
    submenuEl.css('display', 'none');
    $row.find("a.first-level-link").removeClass('maintainHover');
  }
  $mainMenu.on('mouseleave', function() {
    var submenuElOut = $menu.find('.submenu-wrapper'),
      linkActiveOut = $menu.find("a.first-level-link");
    submenuElOut.css('display', 'none');
    linkActiveOut.removeClass('maintainHover');
  });
});
(function($, window, document) {
  'use strict';
  $.fn.scrollUp = function(options) {
    if (!$.data(document.body, 'scrollUp')) {
      $.data(document.body, 'scrollUp', true);
      $.fn.scrollUp.init(options);
    }
  };
  $.fn.scrollUp.init = function(options) {
    var o = $.fn.scrollUp.settings = $.extend({}, $.fn.scrollUp.defaults, options),
      triggerVisible = false,
      animIn, animOut, animSpeed, scrollDis, scrollEvent, scrollTarget, $self;
    if (o.scrollTrigger) {
      $self = $(o.scrollTrigger);
    } else {
      $self = $('<a/>', {
        id: o.scrollName,
        href: '#top'
      });
    }
    if (o.scrollTitle) {
      $self.attr('title', o.scrollTitle);
    }
    $self.appendTo('body');
    if (!(o.scrollImg || o.scrollTrigger)) {
      $self.html(o.scrollText);
    }
    $self.css({
      display: 'none',
      position: 'fixed',
      zIndex: o.zIndex
    });
    if (o.activeOverlay) {
      $('<div/>', {
        id: o.scrollName + '-active'
      }).css({
        position: 'absolute',
        'top': o.scrollDistance + 'px',
        width: '100%',
        borderTop: '1px dotted' + o.activeOverlay,
        zIndex: o.zIndex
      }).appendTo('body');
    }
    switch (o.animation) {
      case 'fade':
        animIn = 'fadeIn';
        animOut = 'fadeOut';
        animSpeed = o.animationSpeed;
        break;
      case 'slide':
        animIn = 'slideDown';
        animOut = 'slideUp';
        animSpeed = o.animationSpeed;
        break;
      default:
        animIn = 'show';
        animOut = 'hide';
        animSpeed = 0;
    }
    if (o.scrollFrom === 'top') {
      scrollDis = o.scrollDistance;
    } else {
      scrollDis = $(document).height() - $(window).height() - o.scrollDistance;
    }
    scrollEvent = $(window).scroll(function() {
      if ($(window).scrollTop() > scrollDis) {
        if (!triggerVisible) {
          $self[animIn](animSpeed);
          triggerVisible = true;
        }
      } else {
        if (triggerVisible) {
          $self[animOut](animSpeed);
          triggerVisible = false;
        }
      }
    });
    if (o.scrollTarget) {
      if (typeof o.scrollTarget === 'number') {
        scrollTarget = o.scrollTarget;
      } else if (typeof o.scrollTarget === 'string') {
        scrollTarget = Math.floor($(o.scrollTarget).offset().top);
      }
    } else {
      scrollTarget = 0;
    }
    $self.click(function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: scrollTarget
      }, o.scrollSpeed, o.easingType);
    });
  };
  $.fn.scrollUp.defaults = {
    scrollName: 'scrollUp',
    scrollDistance: 300,
    scrollFrom: 'top',
    scrollSpeed: 300,
    easingType: 'linear',
    animation: 'fade',
    animationSpeed: 200,
    scrollTrigger: false,
    scrollTarget: false,
    scrollText: 'Scroll to top',
    scrollTitle: false,
    scrollImg: false,
    activeOverlay: false,
    zIndex: 2147483647
  };
  $.fn.scrollUp.destroy = function(scrollEvent) {
    $.removeData(document.body, 'scrollUp');
    $('#' + $.fn.scrollUp.settings.scrollName).remove();
    $('#' + $.fn.scrollUp.settings.scrollName + '-active').remove();
    if ($.fn.jquery.split('.')[1] >= 7) {
      $(window).off('scroll', scrollEvent);
    } else {
      $(window).unbind('scroll', scrollEvent);
    }
  };
  $.scrollUp = $.fn.scrollUp;
})(jQuery, window, document);
"function" !== typeof Object.create && (Object.create = function(f) {
  function g() {}
  g.prototype = f;
  return new g
});
(function(f, g, k) {
  var l = {
    init: function(a, b) {
      this.$elem = f(b);
      this.options = f.extend({}, f.fn.owlCarousel.options, this.$elem.data(), a);
      this.userOptions = a;
      this.loadContent()
    },
    loadContent: function() {
      function a(a) {
        var d, e = "";
        if ("function" === typeof b.options.jsonSuccess) b.options.jsonSuccess.apply(this, [a]);
        else {
          for (d in a.owl) a.owl.hasOwnProperty(d) && (e += a.owl[d].item);
          b.$elem.html(e)
        }
        b.logIn()
      }
      var b = this,
        e;
      "function" === typeof b.options.beforeInit && b.options.beforeInit.apply(this, [b.$elem]);
      "string" === typeof b.options.jsonPath ? (e = b.options.jsonPath, f.getJSON(e, a)) : b.logIn()
    },
    logIn: function() {
      this.$elem.data("owl-originalStyles", this.$elem.attr("style"));
      this.$elem.data("owl-originalClasses", this.$elem.attr("class"));
      this.$elem.css({
        opacity: 0
      });
      this.orignalItems = this.options.items;
      this.checkBrowser();
      this.wrapperWidth = 0;
      this.checkVisible = null;
      this.setVars()
    },
    setVars: function() {
      if (0 === this.$elem.children().length) return !1;
      this.baseClass();
      this.eventTypes();
      this.$userItems = this.$elem.children();
      this.itemsAmount = this.$userItems.length;
      this.wrapItems();
      this.$owlItems = this.$elem.find(".owl-item");
      this.$owlWrapper = this.$elem.find(".owl-wrapper");
      this.playDirection = "next";
      this.prevItem = 0;
      this.prevArr = [0];
      this.currentItem = 0;
      this.customEvents();
      this.onStartup()
    },
    onStartup: function() {
      this.updateItems();
      this.calculateAll();
      this.buildControls();
      this.updateControls();
      this.response();
      this.moveEvents();
      this.stopOnHover();
      this.owlStatus();
      !1 !== this.options.transitionStyle && this.transitionTypes(this.options.transitionStyle);
      !0 === this.options.autoPlay && (this.options.autoPlay = 5E3);
      this.play();
      this.$elem.find(".owl-wrapper").css("display", "block");
      this.$elem.is(":visible") ? this.$elem.css("opacity", 1) : this.watchVisibility();
      this.onstartup = !1;
      this.eachMoveUpdate();
      "function" === typeof this.options.afterInit && this.options.afterInit.apply(this, [this.$elem])
    },
    eachMoveUpdate: function() {
      !0 === this.options.lazyLoad && this.lazyLoad();
      !0 === this.options.autoHeight && this.autoHeight();
      this.onVisibleItems();
      "function" === typeof this.options.afterAction && this.options.afterAction.apply(this, [this.$elem])
    },
    updateVars: function() {
      "function" === typeof this.options.beforeUpdate && this.options.beforeUpdate.apply(this, [this.$elem]);
      this.watchVisibility();
      this.updateItems();
      this.calculateAll();
      this.updatePosition();
      this.updateControls();
      this.eachMoveUpdate();
      "function" === typeof this.options.afterUpdate && this.options.afterUpdate.apply(this, [this.$elem])
    },
    reload: function() {
      var a = this;
      g.setTimeout(function() {
        a.updateVars()
      }, 0)
    },
    watchVisibility: function() {
      var a = this;
      if (!1 === a.$elem.is(":visible")) a.$elem.css({
        opacity: 0
      }), g.clearInterval(a.autoPlayInterval), g.clearInterval(a.checkVisible);
      else return !1;
      a.checkVisible = g.setInterval(function() {
        a.$elem.is(":visible") && (a.reload(), a.$elem.animate({
          opacity: 1
        }, 200), g.clearInterval(a.checkVisible))
      }, 500)
    },
    wrapItems: function() {
      this.$userItems.wrapAll('<div class="owl-wrapper">').wrap('<div class="owl-item"></div>');
      this.$elem.find(".owl-wrapper").wrap('<div class="owl-wrapper-outer">');
      this.wrapperOuter = this.$elem.find(".owl-wrapper-outer");
      this.$elem.css("display", "block")
    },
    baseClass: function() {
      var a = this.$elem.hasClass(this.options.baseClass),
        b = this.$elem.hasClass(this.options.theme);
      a || this.$elem.addClass(this.options.baseClass);
      b || this.$elem.addClass(this.options.theme)
    },
    updateItems: function() {
      var a, b;
      if (!1 === this.options.responsive) return !1;
      if (!0 === this.options.singleItem) return this.options.items = this.orignalItems = 1, this.options.itemsCustom = !1, this.options.itemsDesktop = !1, this.options.itemsDesktopSmall = !1, this.options.itemsTablet = !1, this.options.itemsTabletSmall = !1, this.options.itemsMobile = !1;
      a = f(this.options.responsiveBaseWidth).width();
      a > (this.options.itemsDesktop[0] || this.orignalItems) && (this.options.items = this.orignalItems);
      if (!1 !== this.options.itemsCustom)
        for (this.options.itemsCustom.sort(function(a, b) {
            return a[0] - b[0]
          }), b = 0; b < this.options.itemsCustom.length; b += 1) this.options.itemsCustom[b][0] <= a && (this.options.items = this.options.itemsCustom[b][1]);
      else a <= this.options.itemsDesktop[0] && !1 !== this.options.itemsDesktop && (this.options.items = this.options.itemsDesktop[1]), a <= this.options.itemsDesktopSmall[0] && !1 !== this.options.itemsDesktopSmall && (this.options.items = this.options.itemsDesktopSmall[1]), a <= this.options.itemsTablet[0] && !1 !== this.options.itemsTablet && (this.options.items = this.options.itemsTablet[1]), a <= this.options.itemsTabletSmall[0] && !1 !== this.options.itemsTabletSmall && (this.options.items = this.options.itemsTabletSmall[1]), a <= this.options.itemsMobile[0] && !1 !== this.options.itemsMobile && (this.options.items = this.options.itemsMobile[1]);
      this.options.items > this.itemsAmount && !0 === this.options.itemsScaleUp && (this.options.items = this.itemsAmount)
    },
    response: function() {
      var a = this,
        b, e;
      if (!0 !== a.options.responsive) return !1;
      e = f(g).width();
      a.resizer = function() {
        f(g).width() !== e && (!1 !== a.options.autoPlay && g.clearInterval(a.autoPlayInterval), g.clearTimeout(b), b = g.setTimeout(function() {
          e = f(g).width();
          a.updateVars()
        }, a.options.responsiveRefreshRate))
      };
      f(g).resize(a.resizer)
    },
    updatePosition: function() {
      this.jumpTo(this.currentItem);
      !1 !== this.options.autoPlay && this.checkAp()
    },
    appendItemsSizes: function() {
      var a = this,
        b = 0,
        e = a.itemsAmount - a.options.items;
      a.$owlItems.each(function(c) {
        var d = f(this);
        d.css({
          width: a.itemWidth
        }).data("owl-item", Number(c));
        if (0 === c % a.options.items || c === e) c > e || (b += 1);
        d.data("owl-roundPages", b)
      })
    },
    appendWrapperSizes: function() {
      this.$owlWrapper.css({
        width: this.$owlItems.length * this.itemWidth * 2,
        left: 0
      });
      this.appendItemsSizes()
    },
    calculateAll: function() {
      this.calculateWidth();
      this.appendWrapperSizes();
      this.loops();
      this.max()
    },
    calculateWidth: function() {
      this.itemWidth = Math.round(this.$elem.width() / this.options.items)
    },
    max: function() {
      var a = -1 * (this.itemsAmount * this.itemWidth - this.options.items * this.itemWidth);
      this.options.items > this.itemsAmount ? this.maximumPixels = a = this.maximumItem = 0 : (this.maximumItem = this.itemsAmount - this.options.items, this.maximumPixels = a);
      return a
    },
    min: function() {
      return 0
    },
    loops: function() {
      var a = 0,
        b = 0,
        e, c;
      this.positionsInArray = [0];
      this.pagesInArray = [];
      for (e = 0; e < this.itemsAmount; e += 1) b += this.itemWidth, this.positionsInArray.push(-b), !0 === this.options.scrollPerPage && (c = f(this.$owlItems[e]), c = c.data("owl-roundPages"), c !== a && (this.pagesInArray[a] = this.positionsInArray[e], a = c))
    },
    buildControls: function() {
      if (!0 === this.options.navigation || !0 === this.options.pagination) this.owlControls = f('<div class="owl-controls"/>').toggleClass("clickable", !this.browser.isTouch).appendTo(this.$elem);
      !0 === this.options.pagination && this.buildPagination();
      !0 === this.options.navigation && this.buildButtons()
    },
    buildButtons: function() {
      var a = this,
        b = f('<div class="owl-buttons"/>');
      a.owlControls.append(b);
      a.buttonPrev = f("<div/>", {
        "class": "owl-prev",
        html: a.options.navigationText[0] || ""
      });
      a.buttonNext = f("<div/>", {
        "class": "owl-next",
        html: a.options.navigationText[1] || ""
      });
      b.append(a.buttonPrev).append(a.buttonNext);
      b.on("touchstart.owlControls mousedown.owlControls", 'div[class^="owl"]', function(a) {
        a.preventDefault()
      });
      b.on("touchend.owlControls mouseup.owlControls", 'div[class^="owl"]', function(b) {
        b.preventDefault();
        f(this).hasClass("owl-next") ? a.next() : a.prev()
      })
    },
    buildPagination: function() {
      var a = this;
      a.paginationWrapper = f('<div class="owl-pagination"/>');
      a.owlControls.append(a.paginationWrapper);
      a.paginationWrapper.on("touchend.owlControls mouseup.owlControls", ".owl-page", function(b) {
        b.preventDefault();
        Number(f(this).data("owl-page")) !== a.currentItem && a.goTo(Number(f(this).data("owl-page")), !0)
      })
    },
    updatePagination: function() {
      var a, b, e, c, d, g;
      if (!1 === this.options.pagination) return !1;
      this.paginationWrapper.html("");
      a = 0;
      b = this.itemsAmount - this.itemsAmount % this.options.items;
      for (c = 0; c < this.itemsAmount; c += 1) 0 === c % this.options.items && (a += 1, b === c && (e = this.itemsAmount - this.options.items), d = f("<div/>", {
        "class": "owl-page"
      }), g = f("<span></span>", {
        text: !0 === this.options.paginationNumbers ? a : "",
        "class": !0 === this.options.paginationNumbers ? "owl-numbers" : ""
      }), d.append(g), d.data("owl-page", b === c ? e : c), d.data("owl-roundPages", a), this.paginationWrapper.append(d));
      this.checkPagination()
    },
    checkPagination: function() {
      var a = this;
      if (!1 === a.options.pagination) return !1;
      a.paginationWrapper.find(".owl-page").each(function() {
        f(this).data("owl-roundPages") === f(a.$owlItems[a.currentItem]).data("owl-roundPages") && (a.paginationWrapper.find(".owl-page").removeClass("active"), f(this).addClass("active"))
      })
    },
    checkNavigation: function() {
      if (!1 === this.options.navigation) return !1;
      !1 === this.options.rewindNav && (0 === this.currentItem && 0 === this.maximumItem ? (this.buttonPrev.addClass("disabled"), this.buttonNext.addClass("disabled")) : 0 === this.currentItem && 0 !== this.maximumItem ? (this.buttonPrev.addClass("disabled"), this.buttonNext.removeClass("disabled")) : this.currentItem === this.maximumItem ? (this.buttonPrev.removeClass("disabled"), this.buttonNext.addClass("disabled")) : 0 !== this.currentItem && this.currentItem !== this.maximumItem && (this.buttonPrev.removeClass("disabled"), this.buttonNext.removeClass("disabled")))
    },
    updateControls: function() {
      this.updatePagination();
      this.checkNavigation();
      this.owlControls && (this.options.items >= this.itemsAmount ? this.owlControls.hide() : this.owlControls.show())
    },
    destroyControls: function() {
      this.owlControls && this.owlControls.remove()
    },
    next: function(a) {
      if (this.isTransition) return !1;
      this.currentItem += !0 === this.options.scrollPerPage ? this.options.items : 1;
      if (this.currentItem > this.maximumItem + (!0 === this.options.scrollPerPage ? this.options.items - 1 : 0))
        if (!0 === this.options.rewindNav) this.currentItem = 0, a = "rewind";
        else return this.currentItem = this.maximumItem, !1;
      this.goTo(this.currentItem, a)
    },
    prev: function(a) {
      if (this.isTransition) return !1;
      this.currentItem = !0 === this.options.scrollPerPage && 0 < this.currentItem && this.currentItem < this.options.items ? 0 : this.currentItem - (!0 === this.options.scrollPerPage ? this.options.items : 1);
      if (0 > this.currentItem)
        if (!0 === this.options.rewindNav) this.currentItem = this.maximumItem, a = "rewind";
        else return this.currentItem = 0, !1;
      this.goTo(this.currentItem, a)
    },
    goTo: function(a, b, e) {
      var c = this;
      if (c.isTransition) return !1;
      "function" === typeof c.options.beforeMove && c.options.beforeMove.apply(this, [c.$elem]);
      a >= c.maximumItem ? a = c.maximumItem : 0 >= a && (a = 0);
      c.currentItem = c.owl.currentItem = a;
      if (!1 !== c.options.transitionStyle && "drag" !== e && 1 === c.options.items && !0 === c.browser.support3d) return c.swapSpeed(0), !0 === c.browser.support3d ? c.transition3d(c.positionsInArray[a]) : c.css2slide(c.positionsInArray[a], 1), c.afterGo(), c.singleItemTransition(), !1;
      a = c.positionsInArray[a];
      !0 === c.browser.support3d ? (c.isCss3Finish = !1, !0 === b ? (c.swapSpeed("paginationSpeed"), g.setTimeout(function() {
        c.isCss3Finish = !0
      }, c.options.paginationSpeed)) : "rewind" === b ? (c.swapSpeed(c.options.rewindSpeed), g.setTimeout(function() {
        c.isCss3Finish = !0
      }, c.options.rewindSpeed)) : (c.swapSpeed("slideSpeed"), g.setTimeout(function() {
        c.isCss3Finish = !0
      }, c.options.slideSpeed)), c.transition3d(a)) : !0 === b ? c.css2slide(a, c.options.paginationSpeed) : "rewind" === b ? c.css2slide(a, c.options.rewindSpeed) : c.css2slide(a, c.options.slideSpeed);
      c.afterGo()
    },
    jumpTo: function(a) {
      "function" === typeof this.options.beforeMove && this.options.beforeMove.apply(this, [this.$elem]);
      a >= this.maximumItem || -1 === a ? a = this.maximumItem : 0 >= a && (a = 0);
      this.swapSpeed(0);
      !0 === this.browser.support3d ? this.transition3d(this.positionsInArray[a]) : this.css2slide(this.positionsInArray[a], 1);
      this.currentItem = this.owl.currentItem = a;
      this.afterGo()
    },
    afterGo: function() {
      this.prevArr.push(this.currentItem);
      this.prevItem = this.owl.prevItem = this.prevArr[this.prevArr.length - 2];
      this.prevArr.shift(0);
      this.prevItem !== this.currentItem && (this.checkPagination(), this.checkNavigation(), this.eachMoveUpdate(), !1 !== this.options.autoPlay && this.checkAp());
      "function" === typeof this.options.afterMove && this.prevItem !== this.currentItem && this.options.afterMove.apply(this, [this.$elem])
    },
    stop: function() {
      this.apStatus = "stop";
      g.clearInterval(this.autoPlayInterval)
    },
    checkAp: function() {
      "stop" !== this.apStatus && this.play()
    },
    play: function() {
      var a = this;
      a.apStatus = "play";
      if (!1 === a.options.autoPlay) return !1;
      g.clearInterval(a.autoPlayInterval);
      a.autoPlayInterval = g.setInterval(function() {
        a.next(!0)
      }, a.options.autoPlay)
    },
    swapSpeed: function(a) {
      "slideSpeed" === a ? this.$owlWrapper.css(this.addCssSpeed(this.options.slideSpeed)) : "paginationSpeed" === a ? this.$owlWrapper.css(this.addCssSpeed(this.options.paginationSpeed)) : "string" !== typeof a && this.$owlWrapper.css(this.addCssSpeed(a))
    },
    addCssSpeed: function(a) {
      return {
        "-webkit-transition": "all " + a + "ms ease",
        "-moz-transition": "all " + a + "ms ease",
        "-o-transition": "all " + a + "ms ease",
        transition: "all " + a + "ms ease"
      }
    },
    removeTransition: function() {
      return {
        "-webkit-transition": "",
        "-moz-transition": "",
        "-o-transition": "",
        transition: ""
      }
    },
    doTranslate: function(a) {
      return {
        "-webkit-transform": "translate3d(" + a + "px, 0px, 0px)",
        "-moz-transform": "translate3d(" + a + "px, 0px, 0px)",
        "-o-transform": "translate3d(" + a + "px, 0px, 0px)",
        "-ms-transform": "translate3d(" +
          a + "px, 0px, 0px)",
        transform: "translate3d(" + a + "px, 0px,0px)"
      }
    },
    transition3d: function(a) {
      this.$owlWrapper.css(this.doTranslate(a))
    },
    css2move: function(a) {
      this.$owlWrapper.css({
        left: a
      })
    },
    css2slide: function(a, b) {
      var e = this;
      e.isCssFinish = !1;
      e.$owlWrapper.stop(!0, !0).animate({
        left: a
      }, {
        duration: b || e.options.slideSpeed,
        complete: function() {
          e.isCssFinish = !0
        }
      })
    },
    checkBrowser: function() {
      var a = k.createElement("div");
      a.style.cssText = "  -moz-transform:translate3d(0px, 0px, 0px); -ms-transform:translate3d(0px, 0px, 0px); -o-transform:translate3d(0px, 0px, 0px); -webkit-transform:translate3d(0px, 0px, 0px); transform:translate3d(0px, 0px, 0px)";
      a = a.style.cssText.match(/translate3d\(0px, 0px, 0px\)/g);
      this.browser = {
        support3d: null !== a && 1 === a.length,
        isTouch: "ontouchstart" in g || g.navigator.msMaxTouchPoints
      }
    },
    moveEvents: function() {
      if (!1 !== this.options.mouseDrag || !1 !== this.options.touchDrag) this.gestures(), this.disabledEvents()
    },
    eventTypes: function() {
      var a = ["s", "e", "x"];
      this.ev_types = {};
      !0 === this.options.mouseDrag && !0 === this.options.touchDrag ? a = ["touchstart.owl mousedown.owl", "touchmove.owl mousemove.owl", "touchend.owl touchcancel.owl mouseup.owl"] : !1 === this.options.mouseDrag && !0 === this.options.touchDrag ? a = ["touchstart.owl", "touchmove.owl", "touchend.owl touchcancel.owl"] : !0 === this.options.mouseDrag && !1 === this.options.touchDrag && (a = ["mousedown.owl", "mousemove.owl", "mouseup.owl"]);
      this.ev_types.start = a[0];
      this.ev_types.move = a[1];
      this.ev_types.end = a[2]
    },
    disabledEvents: function() {
      this.$elem.on("dragstart.owl", function(a) {
        a.preventDefault()
      });
      this.$elem.on("mousedown.disableTextSelect", function(a) {
        return f(a.target).is("input, textarea, select, option")
      })
    },
    gestures: function() {
      function a(a) {
        if (void 0 !== a.touches) return {
          x: a.touches[0].pageX,
          y: a.touches[0].pageY
        };
        if (void 0 === a.touches) {
          if (void 0 !== a.pageX) return {
            x: a.pageX,
            y: a.pageY
          };
          if (void 0 === a.pageX) return {
            x: a.clientX,
            y: a.clientY
          }
        }
      }

      function b(a) {
        "on" === a ? (f(k).on(d.ev_types.move, e), f(k).on(d.ev_types.end, c)) : "off" === a && (f(k).off(d.ev_types.move), f(k).off(d.ev_types.end))
      }

      function e(b) {
        b = b.originalEvent || b || g.event;
        d.newPosX = a(b).x - h.offsetX;
        d.newPosY = a(b).y - h.offsetY;
        d.newRelativeX = d.newPosX - h.relativePos;
        "function" === typeof d.options.startDragging && !0 !== h.dragging && 0 !== d.newRelativeX && (h.dragging = !0, d.options.startDragging.apply(d, [d.$elem]));
        (8 < d.newRelativeX || -8 > d.newRelativeX) && !0 === d.browser.isTouch && (void 0 !== b.preventDefault ? b.preventDefault() : b.returnValue = !1, h.sliding = !0);
        (10 < d.newPosY || -10 > d.newPosY) && !1 === h.sliding && f(k).off("touchmove.owl");
        d.newPosX = Math.max(Math.min(d.newPosX, d.newRelativeX / 5), d.maximumPixels + d.newRelativeX / 5);
        !0 === d.browser.support3d ? d.transition3d(d.newPosX) : d.css2move(d.newPosX)
      }

      function c(a) {
        a = a.originalEvent || a || g.event;
        var c;
        a.target = a.target || a.srcElement;
        h.dragging = !1;
        !0 !== d.browser.isTouch && d.$owlWrapper.removeClass("grabbing");
        d.dragDirection = 0 > d.newRelativeX ? d.owl.dragDirection = "left" : d.owl.dragDirection = "right";
        0 !== d.newRelativeX && (c = d.getNewPosition(), d.goTo(c, !1, "drag"), h.targetElement === a.target && !0 !== d.browser.isTouch && (f(a.target).on("click.disable", function(a) {
          a.stopImmediatePropagation();
          a.stopPropagation();
          a.preventDefault();
          f(a.target).off("click.disable")
        }), a = f._data(a.target, "events").click, c = a.pop(), a.splice(0, 0, c)));
        b("off")
      }
      var d = this,
        h = {
          offsetX: 0,
          offsetY: 0,
          baseElWidth: 0,
          relativePos: 0,
          position: null,
          minSwipe: null,
          maxSwipe: null,
          sliding: null,
          dargging: null,
          targetElement: null
        };
      d.isCssFinish = !0;
      d.$elem.on(d.ev_types.start, ".owl-wrapper", function(c) {
        c = c.originalEvent || c || g.event;
        var e;
        if (3 === c.which) return !1;
        if (!(d.itemsAmount <= d.options.items)) {
          if (!1 === d.isCssFinish && !d.options.dragBeforeAnimFinish || !1 === d.isCss3Finish && !d.options.dragBeforeAnimFinish) return !1;
          !1 !== d.options.autoPlay && g.clearInterval(d.autoPlayInterval);
          !0 === d.browser.isTouch || d.$owlWrapper.hasClass("grabbing") || d.$owlWrapper.addClass("grabbing");
          d.newPosX = 0;
          d.newRelativeX = 0;
          f(this).css(d.removeTransition());
          e = f(this).position();
          h.relativePos = e.left;
          h.offsetX = a(c).x - e.left;
          h.offsetY = a(c).y - e.top;
          b("on");
          h.sliding = !1;
          h.targetElement = c.target || c.srcElement
        }
      })
    },
    getNewPosition: function() {
      var a = this.closestItem();
      a > this.maximumItem ? a = this.currentItem = this.maximumItem : 0 <= this.newPosX && (this.currentItem = a = 0);
      return a
    },
    closestItem: function() {
      var a = this,
        b = !0 === a.options.scrollPerPage ? a.pagesInArray : a.positionsInArray,
        e = a.newPosX,
        c = null;
      f.each(b, function(d, g) {
        e - a.itemWidth / 20 > b[d + 1] && e - a.itemWidth / 20 < g && "left" === a.moveDirection() ? (c = g, a.currentItem = !0 === a.options.scrollPerPage ? f.inArray(c, a.positionsInArray) : d) : e + a.itemWidth / 20 < g && e + a.itemWidth / 20 > (b[d + 1] || b[d] - a.itemWidth) && "right" === a.moveDirection() && (!0 === a.options.scrollPerPage ? (c = b[d + 1] || b[b.length - 1], a.currentItem = f.inArray(c, a.positionsInArray)) : (c = b[d + 1], a.currentItem = d + 1))
      });
      return a.currentItem
    },
    moveDirection: function() {
      var a;
      0 > this.newRelativeX ? (a = "right", this.playDirection = "next") : (a = "left", this.playDirection = "prev");
      return a
    },
    customEvents: function() {
      var a = this;
      a.$elem.on("owl.next", function() {
        a.next()
      });
      a.$elem.on("owl.prev", function() {
        a.prev()
      });
      a.$elem.on("owl.play", function(b, e) {
        a.options.autoPlay = e;
        a.play();
        a.hoverStatus = "play"
      });
      a.$elem.on("owl.stop", function() {
        a.stop();
        a.hoverStatus = "stop"
      });
      a.$elem.on("owl.goTo", function(b, e) {
        a.goTo(e)
      });
      a.$elem.on("owl.jumpTo", function(b, e) {
        a.jumpTo(e)
      })
    },
    stopOnHover: function() {
      var a = this;
      !0 === a.options.stopOnHover && !0 !== a.browser.isTouch && !1 !== a.options.autoPlay && (a.$elem.on("mouseover", function() {
        a.stop()
      }), a.$elem.on("mouseout", function() {
        "stop" !== a.hoverStatus && a.play()
      }))
    },
    lazyLoad: function() {
      var a, b, e, c, d;
      if (!1 === this.options.lazyLoad) return !1;
      for (a = 0; a < this.itemsAmount; a += 1) b = f(this.$owlItems[a]), "loaded" !== b.data("owl-loaded") && (e = b.data("owl-item"), c = b.find(".lazyOwl"), "string" !== typeof c.data("src") ? b.data("owl-loaded", "loaded") : (void 0 === b.data("owl-loaded") && (c.hide(), b.addClass("loading").data("owl-loaded", "checked")), (d = !0 === this.options.lazyFollow ? e >= this.currentItem : !0) && e < this.currentItem + this.options.items && c.length && this.lazyPreload(b, c)))
    },
    lazyPreload: function(a, b) {
      function e() {
        a.data("owl-loaded", "loaded").removeClass("loading");
        b.removeAttr("data-src");
        "fade" === d.options.lazyEffect ? b.fadeIn(400) : b.show();
        "function" === typeof d.options.afterLazyLoad && d.options.afterLazyLoad.apply(this, [d.$elem])
      }

      function c() {
        f += 1;
        d.completeImg(b.get(0)) || !0 === k ? e() : 100 >= f ? g.setTimeout(c, 100) : e()
      }
      var d = this,
        f = 0,
        k;
      "DIV" === b.prop("tagName") ? (b.css("background-image", "url(" + b.data("src") + ")"), k = !0) : b[0].src = b.data("src");
      c()
    },
    autoHeight: function() {
      function a() {
        var a = f(e.$owlItems[e.currentItem]).height();
        e.wrapperOuter.css("height", a + "px");
        e.wrapperOuter.hasClass("autoHeight") || g.setTimeout(function() {
          e.wrapperOuter.addClass("autoHeight")
        }, 0)
      }

      function b() {
        d += 1;
        e.completeImg(c.get(0)) ? a() : 100 >= d ? g.setTimeout(b, 100) : e.wrapperOuter.css("height", "")
      }
      var e = this,
        c = f(e.$owlItems[e.currentItem]).find("img"),
        d;
      void 0 !== c.get(0) ? (d = 0, b()) : a()
    },
    completeImg: function(a) {
      return !a.complete || "undefined" !== typeof a.naturalWidth && 0 === a.naturalWidth ? !1 : !0
    },
    onVisibleItems: function() {
      var a;
      !0 === this.options.addClassActive && this.$owlItems.removeClass("active");
      this.visibleItems = [];
      for (a = this.currentItem; a < this.currentItem + this.options.items; a += 1) this.visibleItems.push(a), !0 === this.options.addClassActive && f(this.$owlItems[a]).addClass("active");
      this.owl.visibleItems = this.visibleItems
    },
    transitionTypes: function(a) {
      this.outClass = "owl-" + a + "-out";
      this.inClass = "owl-" + a + "-in"
    },
    singleItemTransition: function() {
      var a = this,
        b = a.outClass,
        e = a.inClass,
        c = a.$owlItems.eq(a.currentItem),
        d = a.$owlItems.eq(a.prevItem),
        f = Math.abs(a.positionsInArray[a.currentItem]) + a.positionsInArray[a.prevItem],
        g = Math.abs(a.positionsInArray[a.currentItem]) + a.itemWidth / 2;
      a.isTransition = !0;
      a.$owlWrapper.addClass("owl-origin").css({
        "-webkit-transform-origin": g + "px",
        "-moz-perspective-origin": g + "px",
        "perspective-origin": g + "px"
      });
      d.css({
        position: "relative",
        left: f + "px"
      }).addClass(b).on("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend", function() {
        a.endPrev = !0;
        d.off("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend");
        a.clearTransStyle(d, b)
      });
      c.addClass(e).on("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend", function() {
        a.endCurrent = !0;
        c.off("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend");
        a.clearTransStyle(c, e)
      })
    },
    clearTransStyle: function(a, b) {
      a.css({
        position: "",
        left: ""
      }).removeClass(b);
      this.endPrev && this.endCurrent && (this.$owlWrapper.removeClass("owl-origin"), this.isTransition = this.endCurrent = this.endPrev = !1)
    },
    owlStatus: function() {
      this.owl = {
        userOptions: this.userOptions,
        baseElement: this.$elem,
        userItems: this.$userItems,
        owlItems: this.$owlItems,
        currentItem: this.currentItem,
        prevItem: this.prevItem,
        visibleItems: this.visibleItems,
        isTouch: this.browser.isTouch,
        browser: this.browser,
        dragDirection: this.dragDirection
      }
    },
    clearEvents: function() {
      this.$elem.off(".owl owl mousedown.disableTextSelect");
      f(k).off(".owl owl");
      f(g).off("resize", this.resizer)
    },
    unWrap: function() {
      0 !== this.$elem.children().length && (this.$owlWrapper.unwrap(), this.$userItems.unwrap().unwrap(), this.owlControls && this.owlControls.remove());
      this.clearEvents();
      this.$elem.attr("style", this.$elem.data("owl-originalStyles") || "").attr("class", this.$elem.data("owl-originalClasses"))
    },
    destroy: function() {
      this.stop();
      g.clearInterval(this.checkVisible);
      this.unWrap();
      this.$elem.removeData()
    },
    reinit: function(a) {
      a = f.extend({}, this.userOptions, a);
      this.unWrap();
      this.init(a, this.$elem)
    },
    addItem: function(a, b) {
      var e;
      if (!a) return !1;
      if (0 === this.$elem.children().length) return this.$elem.append(a), this.setVars(), !1;
      this.unWrap();
      e = void 0 === b || -1 === b ? -1 : b;
      e >= this.$userItems.length || -1 === e ? this.$userItems.eq(-1).after(a) : this.$userItems.eq(e).before(a);
      this.setVars()
    },
    removeItem: function(a) {
      if (0 === this.$elem.children().length) return !1;
      a = void 0 === a || -1 === a ? -1 : a;
      this.unWrap();
      this.$userItems.eq(a).remove();
      this.setVars()
    }
  };
  f.fn.owlCarousel = function(a) {
    return this.each(function() {
      if (!0 === f(this).data("owl-init")) return !1;
      f(this).data("owl-init", !0);
      var b = Object.create(l);
      b.init(a, this);
      f.data(this, "owlCarousel", b)
    })
  };
  f.fn.owlCarousel.options = {
    items: 5,
    itemsCustom: !1,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [979, 3],
    itemsTablet: [768, 2],
    itemsTabletSmall: !1,
    itemsMobile: [479, 1],
    singleItem: !1,
    itemsScaleUp: !1,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1E3,
    autoPlay: !1,
    stopOnHover: !1,
    navigation: !1,
    navigationText: ["prev", "next"],
    rewindNav: !0,
    scrollPerPage: !1,
    pagination: !0,
    paginationNumbers: !1,
    responsive: !0,
    responsiveRefreshRate: 200,
    responsiveBaseWidth: g,
    baseClass: "owl-carousel",
    theme: "owl-theme",
    lazyLoad: !1,
    lazyFollow: !0,
    lazyEffect: "fade",
    autoHeight: !1,
    jsonPath: !1,
    jsonSuccess: !1,
    dragBeforeAnimFinish: !0,
    mouseDrag: !0,
    touchDrag: !0,
    addClassActive: !1,
    transitionStyle: !1,
    beforeUpdate: !1,
    afterUpdate: !1,
    beforeInit: !1,
    afterInit: !1,
    beforeMove: !1,
    afterMove: !1,
    afterAction: !1,
    startDragging: !1,
    afterLazyLoad: !1
  }
})(jQuery, window, document);

"function" != typeof Object.create && (Object.create = function(e) {
    function t() {}
    return t.prototype = e, new t
  }),
  function($, e, t, n) {
    var o = "simpleSocialShare",
      i = "plugin_" + o,
      r = {
        init: function(e, t) {
          var n = this;
          return n.options = $.extend(!0, {}, $.fn[o].options, e), n.namespace = "." + o + "." + (new Date).getTime(), n.element = t, n.$element = $(t), n.allowedNetworks = ["facebook", "twitter", "linkedin", "googleplus", "pinterest", "reddit"], n.bind(), n
        },
        bind: function() {
          var e = this;
          e.bindProxied(e.$element, "click", e.openSocialSharePopup)
        },
        bindProxied: function(e, t, n) {
          var o = this;
          e.on(t + o.namespace, $.proxy(function(e) {
            return n.call(o, e)
          }, o))
        },
        destroy: function() {
          var e = this;
          e.$element.off(e.namespace), e.$element.removeData(i)
        },
        openSocialSharePopup: function(e) {
          e.preventDefault();
          var t = this,
            n = !1,
            o = t.$element.data("share-url"),
            i = t.$element.data("share-network"),
            r = t.$element.data("share-text"),
            a = t.$element.data("share-title"),
            d = t.$element.data("share-via"),
            c = t.$element.data("share-tags"),
            s = t.$element.data("share-media"),
            p = "";
          if ("undefined" != typeof o && "undefined" != typeof i && t.allowedNetworks.indexOf(i) > -1 && (n = !0), n === !0) switch (i) {
            case "facebook":
              p = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(o);
              break;
            case "googleplus":
              p = "https://plus.google.com/share?url=" + encodeURIComponent(o);
              break;
            case "linkedin":
              p = "https://www.linkedin.com/shareArticle?mini=true&url=" + encodeURIComponent(o) + "&source=" + encodeURIComponent(o), "undefined" != typeof a && "" !== a && (p += "&title=" + encodeURIComponent(a)), "undefined" != typeof r && "" !== r && (p += "&summary=" + encodeURIComponent(r));
              break;
            case "pinterest":
              p = "https://www.pinterest.com/pin/create/button/?url=" + encodeURIComponent(o), "undefined" != typeof s && "" !== s && (p += "&media=" + encodeURIComponent(s)), "undefined" != typeof r && "" !== r && (p += "&description=" + encodeURIComponent(r)), "undefined" != typeof c && "" !== c && (p += "&hashtags=" + c);
              break;
            case "reddit":
              p = "http://www.reddit.com/submit/?url=" + encodeURIComponent(o);
              break;
            case "twitter":
              p = "https://twitter.com/intent/tweet?&url=" + encodeURIComponent(o), "undefined" != typeof r && "" !== r && (p += "&text=" + encodeURIComponent(r)), "undefined" != typeof d && "" !== d && (p += "&via=" + encodeURIComponent(d)), "undefined" != typeof c && "" !== c && (p += "&hashtags=" + c);
              break;
            default:
              return !1
          }
          n && t.popupwindow(p, "", 500, 300)
        },
        popupwindow: function(t, n, o, i) {
          var r = screen.width / 2 - o / 2,
            a = screen.height / 2 - i / 2;
          return e.open(t, n, "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=" + o + ", height=" + i + ", top=" + a + ", left=" + r)
        }
      };
    $.fn[o] = function(e) {
      var t = Array.prototype.slice.call(arguments);
      return this.each(function() {
        var n = $.data(this, i);
        if ("object" != typeof e && "init" !== e && e) {
          if (!n) return void $.error("Simple Social Share is not initialized for this object yet.");
          if (!n[e]) return void $.error("Method " + e + " does not exist on jQuery." + o + ".");
          var a = e;
          e = t.slice(1), n[a].apply(n, e)
        } else {
          if (n) return void $.error("Simple Social Share is already initialized for this object.");
          "init" === e && (e = t[1] || {}), n = Object.create(r).init(e, this), $.data(this, i, n)
        }
      })
    }
  }(jQuery, window, document);

/**
 * Created by saintramzes on 6/2/16.
 */

$(function() {
  $('.drop-list-item').hover(
    function() {
      var img = $(this).attr('data-img');
      if (img) {
        $(this).parents('.drop_submenu').find('img.dropdown-pimary-img').hide();
        $(this).parents('.drop_submenu').find('img.dropdown-img').attr('src', img);
        $(this).parents('.drop_submenu').find('img.dropdown-img').show();
      }
    },
    function() {
      $('.main-block').css({
        'background': '',
        'position': '',
        'opacity': ''
      });
      var img = $(this).attr('data-img');
      if (img) {
        $(this).parents('.drop_submenu').find('img.dropdown-pimary-img').show();
        $(this).parents('.drop_submenu').find('img.dropdown-img').hide();
        $(this).parents('.drop_submenu').find('img.dropdown-img').removeAttr('src');
      }
    }

  );
});


$("#id_rating").rating();

$(".rating-display-only").rating({
  displayOnly: true
});

$("input[type='tel']").mask("(999)999-99-99");

$('#read_more').readmore({
  speed: 75,
  collapsedHeight: 252,
  moreLink: '<div class="text-left padding-top-10">\ <a href="#" class="btn btn-read">Узнать больше</a>\ </div>',
  lessLink: '<div class="text-left padding-top-10">\ <a href="#" class="btn btn-read">Свернуть</a>\ </div>'
});

$(window).ready(function() {
  var blen = 141;
  while (blen > 130) {
    blen = 0;
    $('ul.breadcrumb > li > a').each(function(i) {
      blen += $(this).text().length;
    });
    $('ul.breadcrumb > li > span').each(function(i) {
      blen += $(this).text().length;
    });
    if (blen > 130) {
      $('ul.breadcrumb li:nth-child(2)').remove();
    }
  }
}).scroll(function() {
  var miniheader = $("#navbar-miniheader");
  var navbar = $("#navbar-header");
  var top = 200;
  if ($(window).scrollTop() >= top) {
    miniheader.css("display", "block");
    navbar.css("display", "none");
  } else {
    miniheader.css("display", "none");
    navbar.css("display", "block");
  }
}).ready(function() {
  $('select').select2();
  $('b[role="presentation"]').hide();
  $('.select2-selection__arrow').append('<i class="presentation"></i>');
});
$("#toggle-icons").click(function() {
  $(this).find('img').toggle();
});

var main_nav = $('#main_nav');
main_nav.on('show.bs.collapse', '.collapse', function() {
  main_nav.find('.collapse.in').collapse('hide');
});

$('#navbar-mid-collapse').on('shown.bs.collapse', function() {
  $('#navbar-hamburger').addClass('hidden');
  $('#navbar-hamburger').parent('button').addClass('navbar-close');
  $('#navbar-close').removeClass('hidden');
}).on('hidden.bs.collapse', function() {
  $('#navbar-hamburger').removeClass('hidden');
  $('#navbar-hamburger').parent('button').removeClass('navbar-close');
  $('#navbar-close').addClass('hidden');
});

$('.disabled_link').on('click', function(event) {
  event.preventDefault();
  return false;
})

$(function() {
  $.scrollUp({
    scrollName: 'scrollUp',
    scrollDistance: 300,
    scrollFrom: 'top',
    scrollSpeed: 600,
    easingType: 'linear',
    animation: 'fade',
    animationSpeed: 200,
    scrollTrigger: false,
    scrollTarget: false,
    scrollText: '<i class="fa fa-chevron-up" aria-hidden="true"></i>',
    scrollTitle: false,
    scrollImg: false,
    activeOverlay: false,
    zIndex: 2147483647
  });
});

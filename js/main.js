var animatationPositions, inverval, l, menuActive, menuActiveParent;

l = function(data) {
  return console.log(data);
};

inverval = function(time, fn, args) {
  return setInterval(fn, time, args);
};

animatationContainerWidth;

animatationPositions = [[0.05, 0.45], [0.25, 0.82], [0.68, 0.78], [0.7, 0.3], [0.35, 0.1]];

menuActive = $('#main-content').data('menu-active');

menuActiveParent = $('#main-content').data('menu-active-parent');

jQuery(document).ready(function($) {
  var animatationContainerWidth, masonry, tallestItem;
  if (/mobile/i.test(navigator.userAgent) && !window.location.hash) {
    setTimeout((function() {
      return window.scrollTo(0, 1);
    }), 0);
  }
  if (!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src'.replace('.svg', '.png'));
    });
  }
  if (menuActive) {
    $('header').find('.' + menuActive).addClass('active');
  }
  if (menuActiveParent) {
    $('header').find('.' + menuActiveParent).addClass('active');
  }
  if ($('body.home')) {
    masonry = $('.js-masonry');
    masonry.imagesLoaded(function() {
      return masonry.masonry({
        columnWidth: 1,
        itemSelector: '.home-item'
      });
    });
  }
  $('.language-toggle').on('click', function() {
    $('.copy').hide();
    $('.language-toggle').hide();
    if ($(this).data('language') === 'english') {
      $('.english-copy').show();
      return $('.language-toggle-spanish').show();
    } else {
      $('.spanish-copy').show();
      return $('.language-toggle-english').show();
    }
  });
  if ($('body.home')) {
    animatationContainerWidth = $('.animatation-container').innerWidth();
    tallestItem = 0;
    $(window).resize(function() {
      return animatationContainerWidth = $('.animatation-container').innerWidth();
    });
    $('.home-item').each(function(index, item) {
      var itemHeight, itemWidth;
      itemWidth = $(this).innerWidth();
      itemHeight = $(this).innerHeight();
      if (itemHeight > tallestItem) {
        tallestItem = itemHeight;
      }
      $(item).css({
        'top': ((animatationContainerWidth * animatationPositions[index][0]) - (itemHeight / 2)) + 'px',
        'left': ((animatationContainerWidth * animatationPositions[index][1]) - (itemWidth / 2)) + 'px'
      });
      $(item).data('animation-index', index);
      if (index === 4) {
        return $('.animatation-container').css({
          'margin-top': (tallestItem / 3) + 'px'
        });
      }
    });
    return inverval(5000, function() {
      $('.home-item').each(function(index, item) {
        var animationIndex, itemHeight, itemWidth, newIndex;
        itemWidth = $(this).innerWidth();
        itemHeight = $(this).innerHeight();
        animationIndex = $(item).data('animation-index');
        if (animationIndex === 4) {
          newIndex = 0;
        } else {
          newIndex = animationIndex + 1;
        }
        $(item).css({
          'top': ((animatationContainerWidth * animatationPositions[newIndex][0]) - (itemHeight / 2)) + 'px',
          'left': ((animatationContainerWidth * animatationPositions[newIndex][1]) - (itemWidth / 2)) + 'px'
        });
        return $(item).data('animation-index', newIndex);
      });
    });
  }
});
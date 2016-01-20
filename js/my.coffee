l = (data) ->
  console.log data

inverval = (time, fn, args) ->
  setInterval fn, time, args

animatationContainerWidth
animatationPositions = [[0.05,0.45], [0.25,0.82], [0.68,0.78], [0.7,0.3], [0.35,0.1]]

menuActive = $('#main-content').data('menu-active')
menuActiveParent = $('#main-content').data('menu-active-parent')

# JQuery doc ready - you can use the $ shortcut inside here:
jQuery(document).ready ($) ->

 # hide safari menu in iOS
  if /mobile/i.test(navigator.userAgent) and !window.location.hash
    setTimeout (-> window.scrollTo(0, 1)), 0

 # use .svg files freely but provide a fallback png with the same name in same folder
  if !Modernizr.svg
    $('img[src*="svg"]').attr 'src', ->
      $(this).attr 'src' .replace '.svg', '.png'

  if menuActive
    $('header').find('.'+menuActive).addClass('active')

  if menuActiveParent
    $('header').find('.'+menuActiveParent).addClass('active')

  if $('body.home')
    masonry = $('.js-masonry')
    masonry.imagesLoaded ->
      masonry.masonry {
        columnWidth: 1
        itemSelector: '.home-item'
        }

  $('.language-toggle').on 'click', ->
    $('.copy').hide()
    $('.language-toggle').hide()
    if ($(this).data('language') == 'english')
      $('.english-copy').show()
      $('.language-toggle-spanish').show()
    else
      $('.spanish-copy').show()
      $('.language-toggle-english').show()

  if $('body.home')
    animatationContainerWidth = $('.animatation-container').innerWidth()
    tallestItem = 0

    $(window).resize ->
      animatationContainerWidth = $('.animatation-container').innerWidth()

    $('.home-item').each (index, item) ->
      itemWidth = $(this).innerWidth()
      itemHeight = $(this).innerHeight()
      if itemHeight > tallestItem
        tallestItem = itemHeight
      $(item).css {
        'top': ((animatationContainerWidth*animatationPositions[index][0])-(itemHeight/2))+'px'
        'left': ((animatationContainerWidth*animatationPositions[index][1])-(itemWidth/2))+'px'
        }
      $(item).data('animation-index', index)
      if index == 4
        $('.animatation-container').css {
          'margin-top': (tallestItem/3)+'px'
          }

    inverval 5000, ->
      $('.home-item').each (index, item) ->
        itemWidth = $(this).innerWidth()
        itemHeight = $(this).innerHeight()
        animationIndex = $(item).data('animation-index')
        if animationIndex == 4
          newIndex = 0
        else
          newIndex = animationIndex+1
        $(item).css {
          'top': ((animatationContainerWidth*animatationPositions[newIndex][0])-(itemHeight/2))+'px'
          'left': ((animatationContainerWidth*animatationPositions[newIndex][1])-(itemWidth/2))+'px'
          }
        $(item).data('animation-index', newIndex)
      return
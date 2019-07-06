  var doc = $(document);

  doc.on('scroll', function(){
    if (doc.scrollTop()>$('.react').offset().top/2 && $('.resH').hasClass('hiddenH')) {
      $('.resH').removeClass('hiddenH')
      $('.resP').removeClass('hiddenP')
    }
  })

  doc.on('scroll', function(){
    if (doc.scrollTop()>$('#intro').offset().top/1.25 && $('.imgIntro').hasClass('hiddenI')) {
      $('.imgIntro').removeClass('hiddenI')
    }
  })

  doc.on('scroll', function(){
    if (doc.scrollTop()>$('#skills').offset().top/1.15) {
      $('.skill').removeClass('hiddenSkill');
    }
  })

  doc.on('scroll', function(){
    if (doc.scrollTop()>$('.res').offset().top/2) {
      $('.logo').removeClass('hiddenLogo')
    }
    if (doc.scrollTop()<$('.res').offset().top/2) {
      $('.logo').addClass('hiddenLogo')
    }
    if (doc.scrollTop()>$('#intro').offset().top/1.5) {
      $('.logo').addClass('movedLogo')
    }
    if (doc.scrollTop()>$('#skills').offset().top/2) {
      $('.logo').removeClass('movedLogo')
      $('.logo').addClass('movedLogoTwo');
    }
    if (doc.scrollTop()<$('#skills').offset().top/2 && $('.logo').hasClass('movedLogoTwo')) {
      $('.logo').removeClass('movedLogoTwo')
      $('.logo').addClass('movedLogo');
    }
    if (doc.scrollTop()<$('#intro').offset().top/1.5) {
      $('.logo').removeClass('movedLogo');
    }
  })

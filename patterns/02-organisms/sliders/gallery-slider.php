<div id="gallery-1" class="royalSlider rsDefault slider card rhythm-block">
    <a class="rsImg" data-rsbigimg="<?php echo IMAGES; ?>/img/paintings/bird-1.jpg" href="<?php echo IMAGES; ?>/img/paintings/700x500/bird-1.jpg"><img width="96" height="72" class="rsTmb" src="<?php echo IMAGES; ?>/img/paintings/t/bird-1.jpg"></a>
    <a class="rsImg" data-rsbigimg="<?php echo IMAGES; ?>/img/paintings/bird-2.jpg" href="<?php echo IMAGES; ?>/img/paintings/700x500/bird-2.jpg"><img width="96" height="72" class="rsTmb" src="<?php echo IMAGES; ?>/img/paintings/t/bird-2.jpg"></a>
</div>
  
<script>
jQuery(document).ready(function($) {
  $('#gallery-1').royalSlider({
    fullscreen: {
      enabled: true,
      nativeFS: true
    },
    controlNavigation: 'thumbnails',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 850,
    loop: false,
    imageScaleMode: 'fit-if-smaller',
	imageScalePadding: 30,
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,
    fadeinLoadedSlide: true,
    globalCaption: false,
    globalCaptionInside: false,
    thumbs: {
      appendSpan: true,
      firstMargin: true,
      paddingBottom: 4
    }
  });
});
</script>
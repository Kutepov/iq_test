$(document).ready(function(){

  $( "#sliderContribution" ).slider({
    value: 10000,
    min: 1000,
    max: 3000000,
    step: 1000,
    range: "min",
    create: function( event, ui ) {
      val = $( "#sliderContribution" ).slider("value");
      $( "#contribution" ).html( val );
    },
    slide: function( event, ui ) {
      $( "#contribution" ).val( ui.value );
    }
   });

  $("#contribution").change(function() {
    $("#sliderContribution").slider("value", $(this).val());
  });

  $( "#sliderSumAddContribution" ).slider({
    value: 10000,
    min: 1000,
    max: 3000000,
    step: 1000,
    range: "min",
    create: function( event, ui ) {
      val = $( "#sliderSumAddContribution" ).slider("value");
      $( "#inputSumAddcontribution" ).html( val );
    },
    slide: function( event, ui ) {
      $( "#inputSumAddcontribution" ).val( ui.value );
    }
  });

  $("#inputSumAddcontribution").change(function() {
    $("#sliderSumAddContribution").slider("value", $(this).val());
  });
});
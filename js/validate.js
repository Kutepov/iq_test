$(document).ready(function (){
  $('#form-calc').validate({
    rules: {
      inputDate: {
        required: true,
        date: true,
      },
      inputContribution: {
        required: true,
        min: 1000,
        max: 3000000,
        number: true,
      },
      inputDurationContribution: {
        required: true,
      },
      inputSumAddcontribution: {
        required: true,
        min: 1000,
        max: 3000000,
        number: true,
      }
    },
    messages: {
      inputDate: {
        required: 'Поле обязательно для заполнения',
        date: 'Поле должно содержать дату'
      },
      inputContribution: {
        required: 'Поле обязательно для заполнения',
        min: 'Слишком маленькое значение (> 1 000)',
        max: 'Слишком большое значение (< 3 000 000)',
        number: 'Введите число',
      },
      inputDurationContribution: {
        required: 'Поле обязательно для заполнения',
      },
      inputSumAddcontribution: {
        required: 'Поле обязательно для заполнения',
        min: 'Слишком маленькое значение (> 1 000)',
        max: 'Слишком большое значение (< 3 000 000)',
        number: 'Введите число',
      },
    }
  });

  $('#isAddContributionTrue').change(function () {
    $('#inputSumAddcontribution').removeAttr('disabled');
  });
  
  $('#isAddContributionFalse').change(function () {
    $('#inputSumAddcontribution').attr('disabled', true);
  });

  

});
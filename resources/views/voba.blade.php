as in Prices table , I call them to candlestick chart by Highchart ,

$(document).ready(function () {

                          // create the chart
    $('#container').highcharts('StockChart', {
                 
                 rangeSelector: {
                     allButtonsEnabled: true,
                 
                 
                       selected: 1
                   },
                 
                   plotOptions: {
                            candlestick: {
                                color: 'red',
                                upColor: 'green'
                            }
                        },
                 
                 title: {
                     text: 'CC Price'
                 },
                 
                 
                 series: [{
                     type: 'candlestick',
                    
                     name: 'AAPL Stock Price',
                   
                     data: [
                 
                       <?php  foreach($priceall as $price) 
                 
                           {?>
                     
                             [ <?php echo strtotime($price['created_at']) *1000 ; ?>, <?php echo $price['openprice']; ?>,<?php echo $price['highprice']; ?>, <?php echo $price['lowprice']; ?> ,<?php echo $price['closeprice'] ?> ],
                         
                         <?php  }?>
                         ] ,
                    dataGrouping: {
                          units: [
                            [
                              'week', // unit name
                              [1] // allowed multiples
                            ], [
                              'month',
                              [1, 2, 3, 4, 6]
                            ]
                          ]
                        }
                 
                 


}]



});
   
      });

     

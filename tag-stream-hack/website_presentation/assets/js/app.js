/**
 * App
 */

var app = {
	fn: function() {
		console.log('app.fn()');

        var sentiment = [
            'positive',
            'negative',
            'neutral'
        ];

        $('.hero-head').bind('click', function() {
            $(this).text('');
        });


        $('#check').bind('click', function() {
            var prng = Math.floor(Math.random() * 3) + 0;
            console.log('PRNG: ', prng);
            console.log('Sentiment is: ', sentiment[prng]);

            //$('.sentiment').text('Sentiment for this city is: ' + sentiment[prng] + '.');
            window.location.href = './' + sentiment[prng] + '.php?city=' + ($('.hero-head').text()).replace('\t','');

            //console.log(($('.hero-head').text()).replace('\t',''));


        });

}
};

$(document).ready(app.fn);

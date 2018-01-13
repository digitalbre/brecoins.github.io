$(function() {
	$(".scrollTo").click(function(e) {
		e.preventDefault();
		var st = '.'+String($(this).attr('href')).substr(1);
		$('html, body').animate({ scrollTop: $(st).offset().top }, 1000);
	});

	var ticker = function() {
		$.getJSON('https://backend.brecoins.com.br/ticker', function(data) {
			$(".__buy").text(accounting.formatMoney(data.sell/1e2, 'R$ ', 2, '.', ','));
			$(".__sell").text(accounting.formatMoney(data.buy/1e2, 'R$ ', 2, '.', ','));
		});
	};
	ticker();
	setInterval(ticker, 10000);
});
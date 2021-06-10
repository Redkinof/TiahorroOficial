<x-app-layout>
    <style type="text/css">
        #cuadro {

        height: 100%;
        }
        #tradingview_c938d{
            height: 700px;
            padding: 20px;
            margin: 20px;
        }

    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div id="cuadro">
                <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
        <div id="tradingview_c938d"></div>
        <div class="tradingview-widget-copyright"><a href="https://es.tradingview.com/symbols/BTCUSD/?exchange=BITBAY" rel="noopener" target="_blank"><span class="blue-text">BTCUSD Gráfico</span></a> por TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
        new TradingView.widget(
        {
        "autosize": true,
        "height": 610,
        "symbol": "BITBAY:BTCUSD",
        "interval": "D",
        "timezone": "US/Mountain",
        "theme": "dark",
        "style": "1",
        "locale": "es",
        "toolbar_bg": "#f1f3f6",
        "enable_publishing": false,
        "allow_symbol_change": true,
        "container_id": "tradingview_c938d"
        }
        );
        </script>
        </div>
        <!-- TradingView Widget END -->
    </div>



</x-app-layout>

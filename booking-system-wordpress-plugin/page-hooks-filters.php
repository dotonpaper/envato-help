      
            <div id="main">
                <section>
                    <h2>Hooks - Filters</h2>
                    
                    <!--
                        Toggle buttons
                    -->
                    <a href="javascript:toggle('hooks-filters', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('hooks-filters', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
                    
                    <!--
                        dopbsp_filter_currencies
                    -->
                    <div class="toggle-wrapper toggle-hooks-filters hidden">
                        <a class="toggle" href="javascript:void(0)">dopbsp_filter_currencies<span class="icon"></span></a>
                        <div class="toggle-content">
                            <p>
                                Use this hook to add your own currency to the booking system.
                            </p>
                            <div class="toggle-code-wrapper displayed">
                                <a class="toggle-code" href="javascript:void(0)">Code<span class="icon"></span></a>
                                <div class="toggle-code-content">
<pre>function dopbsp_add_currency($currencies){
    array_push($currencies, array('code' => 'USD',
                                  'name' => 'United States Dollar',
                                  'sign' => '&#36;'));
    return $currencies;
}
add_filter('dopbsp_filter_currencies', 'dopbsp_add_currency');</pre>
                                </div>
                            </div>
                            <p>
                                You need to add to currencies list an array with the following keys:
                            </p>
                            <ul>
                                <li><strong>code</strong> - ISO 4217 currency code (3 uppercase alphabetical characters). This is usually used by payment gateways to recognize the currency and it is useful only for real currencies. If you intend to add a virtual currency, please make sure the code is not used by a real currency. You can find a code list <a href="http://www.xe.com/iso4217.php" target="_blank">here</a>.</li>
                                <li><strong>name</strong> - Currency name.</li>
                                <li><strong>sign</strong> - Currency sign that will be displayed with the price.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!--
                        dopbsp_filter_languages
                    -->
                    <div class="toggle-wrapper toggle-hooks-filters hidden">
                        <a class="toggle" href="javascript:void(0)">dopbsp_filter_languages<span class="icon"></span></a>
                        <div class="toggle-content">
                            <p>
                                Use this hook to add your own language to the booking system. It can be useful if you want to add different translations, for same language. Once you have added a new language, you must enable it.
                            </p>
                            <div class="toggle-code-wrapper displayed">
                                <a class="toggle-code" href="javascript:void(0)">Code<span class="icon"></span></a>
                                <div class="toggle-code-content">
<pre>function dopbsp_add_language($languages){
    array_push($languages, array('code' => 'en',
                                 'name' => 'English'));
    return $languages;
}
add_filter('dopbsp_filter_languages', 'dopbsp_add_language');</pre>
                                </div>
                            </div>
                            <p>
                                You need to add to languages list an array with the following keys:
                            </p>
                            <ul>
                                <li><strong>code</strong> - ISO 631-1 language code (2 lowercase alphabetical characters; you can use any number of lowercase alphabetical characters for fictional languages). You can find a code list <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank">here</a>.</li>
                                <li><strong>name</strong> - Language name.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
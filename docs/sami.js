
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:KrzysiekPiasecki" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="KrzysiekPiasecki.html">KrzysiekPiasecki</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:KrzysiekPiasecki_Dotpay" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="KrzysiekPiasecki/Dotpay.html">Dotpay</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:KrzysiekPiasecki_Dotpay_Credentials" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="KrzysiekPiasecki/Dotpay/Credentials.html">Credentials</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:KrzysiekPiasecki_Dotpay_Credentials_Credentials" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="KrzysiekPiasecki/Dotpay/Credentials/Credentials.html">Credentials</a>                    </div>                </li>                            <li data-name="class:KrzysiekPiasecki_Dotpay_Credentials_CredentialsInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html">CredentialsInterface</a>                    </div>                </li>                            <li data-name="class:KrzysiekPiasecki_Dotpay_Credentials_CredentialsResolverInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="KrzysiekPiasecki/Dotpay/Credentials/CredentialsResolverInterface.html">CredentialsResolverInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:KrzysiekPiasecki_Dotpay_Request" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="KrzysiekPiasecki/Dotpay/Request.html">Request</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:KrzysiekPiasecki_Dotpay_Request_ResponseFormType" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="KrzysiekPiasecki/Dotpay/Request/ResponseFormType.html">ResponseFormType</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:KrzysiekPiasecki_Dotpay_Response" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="KrzysiekPiasecki/Dotpay/Response.html">Response</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:KrzysiekPiasecki_Dotpay_Response_ResponseBag" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="KrzysiekPiasecki/Dotpay/Response/ResponseBag.html">ResponseBag</a>                    </div>                </li>                            <li data-name="class:KrzysiekPiasecki_Dotpay_Response_ResponseSignature" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="KrzysiekPiasecki/Dotpay/Response/ResponseSignature.html">ResponseSignature</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "KrzysiekPiasecki.html", "name": "KrzysiekPiasecki", "doc": "Namespace KrzysiekPiasecki"},{"type": "Namespace", "link": "KrzysiekPiasecki/Dotpay.html", "name": "KrzysiekPiasecki\\Dotpay", "doc": "Namespace KrzysiekPiasecki\\Dotpay"},{"type": "Namespace", "link": "KrzysiekPiasecki/Dotpay/Credentials.html", "name": "KrzysiekPiasecki\\Dotpay\\Credentials", "doc": "Namespace KrzysiekPiasecki\\Dotpay\\Credentials"},{"type": "Namespace", "link": "KrzysiekPiasecki/Dotpay/Request.html", "name": "KrzysiekPiasecki\\Dotpay\\Request", "doc": "Namespace KrzysiekPiasecki\\Dotpay\\Request"},{"type": "Namespace", "link": "KrzysiekPiasecki/Dotpay/Response.html", "name": "KrzysiekPiasecki\\Dotpay\\Response", "doc": "Namespace KrzysiekPiasecki\\Dotpay\\Response"},
            {"type": "Interface", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface", "doc": "&quot;Represents Seller&#039;s credentials.&quot;"},
                                                        {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html#method_id", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface::id", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html#method_pin", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface::pin", "doc": "&quot;&quot;"},
            
            {"type": "Interface", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsResolverInterface.html", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsResolverInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsResolverInterface", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsResolverInterface.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsResolverInterface.html#method_resolveCredentials", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsResolverInterface::resolveCredentials", "doc": "&quot;&quot;"},
            
            
            {"type": "Class", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/Credentials.html", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\Credentials", "doc": "&quot;Credentials.&quot;"},
                                                        {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/Credentials.html#method___construct", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\Credentials::__construct", "doc": "&quot;Credentials.&quot;"},
                    {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/Credentials.html#method_id", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\Credentials::id", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/Credentials.html#method_pin", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\Credentials::pin", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface", "doc": "&quot;Represents Seller&#039;s credentials.&quot;"},
                                                        {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html#method_id", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface::id", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsInterface.html#method_pin", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsInterface::pin", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsResolverInterface.html", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsResolverInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsResolverInterface", "fromLink": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsResolverInterface.html", "link": "KrzysiekPiasecki/Dotpay/Credentials/CredentialsResolverInterface.html#method_resolveCredentials", "name": "KrzysiekPiasecki\\Dotpay\\Credentials\\CredentialsResolverInterface::resolveCredentials", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "KrzysiekPiasecki\\Dotpay\\Request", "fromLink": "KrzysiekPiasecki/Dotpay/Request.html", "link": "KrzysiekPiasecki/Dotpay/Request/ResponseFormType.html", "name": "KrzysiekPiasecki\\Dotpay\\Request\\ResponseFormType", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Request\\ResponseFormType", "fromLink": "KrzysiekPiasecki/Dotpay/Request/ResponseFormType.html", "link": "KrzysiekPiasecki/Dotpay/Request/ResponseFormType.html#method_configureOptions", "name": "KrzysiekPiasecki\\Dotpay\\Request\\ResponseFormType::configureOptions", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Request\\ResponseFormType", "fromLink": "KrzysiekPiasecki/Dotpay/Request/ResponseFormType.html", "link": "KrzysiekPiasecki/Dotpay/Request/ResponseFormType.html#method_buildForm", "name": "KrzysiekPiasecki\\Dotpay\\Request\\ResponseFormType::buildForm", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "KrzysiekPiasecki\\Dotpay\\Response", "fromLink": "KrzysiekPiasecki/Dotpay/Response.html", "link": "KrzysiekPiasecki/Dotpay/Response/ResponseBag.html", "name": "KrzysiekPiasecki\\Dotpay\\Response\\ResponseBag", "doc": "&quot;Data structure to represent the response sent by Dotpay.&quot;"},
                    
            {"type": "Class", "fromName": "KrzysiekPiasecki\\Dotpay\\Response", "fromLink": "KrzysiekPiasecki/Dotpay/Response.html", "link": "KrzysiekPiasecki/Dotpay/Response/ResponseSignature.html", "name": "KrzysiekPiasecki\\Dotpay\\Response\\ResponseSignature", "doc": "&quot;Represents signature of Dotpay response.&quot;"},
                                                        {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Response\\ResponseSignature", "fromLink": "KrzysiekPiasecki/Dotpay/Response/ResponseSignature.html", "link": "KrzysiekPiasecki/Dotpay/Response/ResponseSignature.html#method___construct", "name": "KrzysiekPiasecki\\Dotpay\\Response\\ResponseSignature::__construct", "doc": "&quot;ResponseSignature.&quot;"},
                    {"type": "Method", "fromName": "KrzysiekPiasecki\\Dotpay\\Response\\ResponseSignature", "fromLink": "KrzysiekPiasecki/Dotpay/Response/ResponseSignature.html", "link": "KrzysiekPiasecki/Dotpay/Response/ResponseSignature.html#method_signature", "name": "KrzysiekPiasecki\\Dotpay\\Response\\ResponseSignature::signature", "doc": "&quot;Returns a Dotpay response signature.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});



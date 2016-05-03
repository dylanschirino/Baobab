
( function() {

    "use strict";

    var fPageIsLoaded,
        fExternalLinkIsClicked,
        fTabLinkIsClicked,
        $tabLinks,
        $tabPanes;


    fTabLinkIsClicked = function( oEvent ) {
        var sTargetPaneID,
            i;

        oEvent.preventDefault();

        // 0. do nothing if current link is already active
        if ( this.parentNode.className.indexOf( "active" ) > -1 ) {
            return;
        }

        // 1. remove active class on pane
        for ( i = 0 ; i < $tabPanes.length ; i++ ) {
            if ( $tabPanes[ i ].className.indexOf( "active" ) > -1 ) {
                $tabPanes[ i ].className = "tab-pane";
            }
        }

        // 2. get target pane
        sTargetPaneID = this.getAttribute( "data-tab-target" );

        // 3. add active class on target pane
        document.getElementById( sTargetPaneID ).className = "tab-pane active";

        // 4. remove active class from link
        for ( i = 0 ; i < $tabLinks.length ; i++ ) {
            $tabLinks[ i ].parentNode.className = $tabLinks[ i ].parentNode.className.replace( "active", "" );
        }

        // 5. add active class on current link
        this.parentNode.className = "active";
    };

    fPageIsLoaded = function() {
        var $externalLinks,
            i;

        // external links
        $externalLinks = document.querySelectorAll( "a[rel=\"external\"]" );

        for ( i = 0 ; i < $externalLinks.length ; i++ ) {
            $externalLinks[ i ].addEventListener( "click", fExternalLinkIsClicked );
        }

        // tab panes
        $tabLinks = document.querySelectorAll( ".nav-tabs li a" );
        $tabPanes = document.querySelectorAll( ".tab-pane" );

        for ( i = 0 ; i < $tabLinks.length ; i++ ) {
            $tabLinks[ i ].addEventListener( "click", fTabLinkIsClicked );
        }
    };

    window.addEventListener( "load", fPageIsLoaded );

} )();

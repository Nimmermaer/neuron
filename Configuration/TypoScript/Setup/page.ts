# Initiate page
page = PAGE
page {
    typeNum = 0
    10 =< lib.templates.base

    shortcutIcon = EXT:neuron/Resources/Public/Icons/neuron.ico

    # META Tag definitions
    meta {
        X-UA-Compatible = IE=edge
        X-UA-Compatible.httpEquivalent = 1

        copyright.data = {$translate}companyName

        language = de,en
        imagetoolbar = false
        viewport = width=device-width, initial-scale=1
        description {
            data = page:description
            ifEmpty.data = levelfield :-1, description, slide
        }

        keywords {
            data = page:keywords
            ifEmpty.data = levelfield :-1, keywords, slide
        }

        author.override.field = author

        abstract {
            data = page:abstract
            data = levelfield:-1, abstract, slide
        }

        date {
            data = page:SYS_LASTCHANGED // page:crdate
            date = Y-m-d
        }

        robots = INDEX,FOLLOW
        viewport = width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no
    }

    # Body Tag Rendering
    bodyTagCObject = COA
    bodyTagCObject {
        10 = TEXT
        10 {
            value = default
            stdWrap.noTrimWrap = |language-| |
        }

        stdWrap {
            trim = 1
            dataWrap = <body class="|" data-languid="{TSFE:sys_language_uid}">
        }
    }

    headerData {
        10 = TEXT
        10 {
            field = title
            noTrimWrap = |<title> | &#124; Aba-Angelshop Laufen </title>|
        }

        11 = TEXT
        11.value (
                <meta name="theme-color" content="#FFA500">
        )
    }
}

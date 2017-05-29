# Initiate template (used by page)
lib.templates.base = FLUIDTEMPLATE
lib.templates.base {
    partialRootPath = EXT:neuron/Resources/Private/Page/Partials/
    layoutRootPath = EXT:neuron/Resources/Private/Page/Layouts/
    dataProcessing {
        100 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        100 {
            references.fieldName = media
            as = files
        }

        120 = MB\Neuron\DataProcessing\PageProcessor
        120 {
            method = listSocialNetworks
            as = socialNetworks
        }
    }

    variables {
        columnMain =< lib.contents.columns.main
        columnFooterLeft =< lib.contents.columns.footerLeft
        columnFooterRight =< lib.contents.columns.footerRight

        homePagePid = TEXT
        homePagePid {
            value = {$global.homePageUid}
        }

        pageTitle = TEXT
        pageTitle {
            value = {$global.page.pageTitle}
        }

        footerStartPid = TEXT
        footerStartPid {
            value = {$global.navigation.footerStartPoint}
        }

        serviceStartPid = TEXT
        serviceStartPid {
            value = {$global.navigation.serviceStartPoint}
        }

        copyright = TEXT
        copyright {
            data = date:U
            strftime = %Y
            wrap = &copy; &nbsp; | &nbsp; {$global.page.copyrightname}
        }
    }
}

# Choose template file (based on backend_layout, respecting heredity)
lib.templates.base.file.stdWrap.cObject = CASE
lib.templates.base.file.stdWrap.cObject {
    key.field = backend_layout
    key.ifEmpty.data = levelfield : -1 , backend_layout_next_level, slide

    pagets__Default = TEXT
    pagets__Default.value = EXT:neuron/Resources/Private/Page/Templates/Default.html

    pagets__Start = TEXT
    pagets__Start.value = EXT:neuron/Resources/Private/Page/Templates/Start.html
}
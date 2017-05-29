TCEFORM {
    pages {
        layout.disabled = 1
        backend_layout.removeItems = -1
        backend_layout_next_level.removeItems = -1
    }

    tt_content {
        imagewidth.disabled = 1
        imageheight.disabled = 1
        imageborder.disabled = 1
        imagecols.disabled = 1
        header_position.disabled = 1
        date.disabled = 1
        imageorient {
            removeItems = 1,2,9,10,17,18,25,26
        }

        layout {
            altLabels {
                1 = LLL:EXT:neuron/Resources/Private/Language/locallang_be.xlf:gallery
                2 = LLL:EXT:neuron/Resources/Private/Language/locallang_be.xlf:projekt
                3 = LLL:EXT:neuron/Resources/Private/Language/locallang_be.xlf:call-To-Action
            }

            addItems {
                4 =  LLL:EXT:neuron/Resources/Private/Language/locallang_be.xlf:teaser
            }
        }

        header_layout {
            altLabels {
                0 = LLL:EXT:neuron/Resources/Private/Language/locallang_be.xlf:default
                1 = H1
                2 = H2
                3 = H3
                4 = H4
                5 = H5
                100 = LLL:EXT:neuron/Resources/Private/Language/locallang_be.xlf:hidden
            }
        }
    }
}


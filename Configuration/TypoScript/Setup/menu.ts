lib {
    mainmenu = HMENU
    mainmenu {
        special = directory
        special.value = {$global.homePageUid}

        1 = TMENU
        1 {
            expAll = 1
            noBlur = 1
            NO = 1
            NO {
                wrapItemAndSub = <li> |</li>
                wrapItemAndSub.insertData = 1
                linkWrap = <span>|</span>
                ATagBeforeWrap = 1
                stdWrap.htmlSpecialChars = 1
            }

            ACT < .NO
            ACT {
                wrapItemAndSub = <li class="active"> |</li>
            }
            wrap =  <ul class="nav navbar-nav navbar-right">|</ul>
        }
    }

    datum = TEXT
    datum.data = date : U
    datum.strftime = %Y

    breadcrumb = COA
    breadcrumb {
        wrap = <ol class="breadcrumb">|</ol>

        # Breadcrumbs
        10 = HMENU
        10 {
            special = rootline
            special.range = 0|-1

            1 = TMENU
            1 {
                NO = 1
                NO.doNotLinkIt = |*| 0 |*| 1
                NO.allWrap = <li> | </li>    |*| <li> | </li>     |*| <li> | </li>
                NO.stdWrap.htmlSpecialChars = 1
            }
        }
    }
}
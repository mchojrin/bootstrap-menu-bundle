<?php return '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown Menu 1
    </a><div class="dropdown-menu"><a class="dropdown-item" href="/app-dropdown-2-route?test=123"
>
      Dropdown Item 2 (should render a dropdown-item)
    </a></div></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown Menu 2
    </a><div class="dropdown-menu"><a class="dropdown-item" href="/app-dropdown-item-3-route"
>
      Dropdown Item 3 (should render a dropdown-item because user has permission)
    </a><a class="dropdown-item" href="https://disney.com"
>
      Dropdown Item 4 (should render a dropdown-item linking to Disney)
    </a></div></li><li class="nav-item"><a class="nav-link" href="/app-link-1-route"
>
      Link 1 (this should render a link)
    </a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown Menu 4
    </a><div class="dropdown-menu"><a class="dropdown-item" href="/app-dropdown-item-8-route"
>
      Dropdown Item 8
    </a><div class="dropdown-divider"></div><h6 class="dropdown-header">Divider 2 (should render a dropdown-header)</h6><a class="dropdown-item" href="/app-dropdown-item-9-route"
>
      Dropdown Item 9
    </a><div class="dropdown-divider"></div><a class="dropdown-item" href="/app-dropdown-item-10-route"
>
      Dropdown Item 10
    </a><a class="dropdown-item" href="/app-dropdown-item-11-route"
>
      Dropdown Item 11
    </a><div class="dropdown-divider"></div><h6 class="dropdown-header">Divider 5</h6><a class="dropdown-item" href="/app-dropdown-item-13-route"
>
      Dropdown Item 13
    </a></div></li>';

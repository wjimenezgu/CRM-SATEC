    <div>
            <ul class="breadcrumb">
                
                    {section loop=$OPTIONS_NAV_MENU name=onm}                    
                    <li>
                        <a href="{$OPTIONS_NAV_MENU[onm].link}">{$OPTIONS_NAV_MENU[onm].opt|lower|capitalize}</a> <span class="divider">/</span>
                    </li>
                    {/section}
            </ul>
    </div>
    @php
        $inner2 = [
            [
                "text" => "خانه" ,
                "icon" => "fas fa-home" , 
                "href" => "#"
            ] , [
                "text" => "درباره ما" ,
                "icon" => "fas fa-users" , 
                "href" => "#"
            ] , [
                "text" => "تماس باما" ,
                "icon" => "fas fa-phone" , 
                "href" => "#"
            ] , [
                "text" => "نمونه کار ها" ,
                "icon" => 'fas fa-caret-down' ,
                "href" => "#" , 
                "subMenu" => [
                    [
                        "text" => "طراحی سایت" ,
                        "icon" => null ,
                        "href" => "#"
                    ] , [
                        "text" => "طراحی قالب وردپرس" ,
                        "icon" => null , 
                        "href" => "#"
                    ]
                ]
            ]
];
        $time = 0;
    @endphp
<nav class="top">
    <i class="fa fa-bars" id="bar" role="button"></i>
    <div class="menu">
        <ul>
            @foreach ($inner2 as $item)
                <li>
                <a href="{{ $item['href'] }}">
                    @if ($item['icon'] != null)
                        <i class="{{ $item['icon'] }}"></i>
                    @endif
                    {{ $item['text'] }}
                </a>
                </li>
                @php
                    $time = $time + 0.25
                @endphp
            @endforeach
        </ul>
    </div>
</nav>
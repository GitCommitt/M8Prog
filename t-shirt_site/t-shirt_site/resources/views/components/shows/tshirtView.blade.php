    <div class="tshirt-card">
        <p class="text-line_1">{{ $tshirt->text_line_1 }}</p>
        <p class="text-line_2">{{ $tshirt->text_line_2 }}</p>
        @php
            $category = strtolower($tshirt->category?->name ?? 'baggy');

            if ($category === 'baggy') {
                $pathData = "M 90,460 L 410,460 L 410,210 L 480,140 L 380,30 L 295,30 L 275,80 L 225,80 L 205,30 L 120,30 L 20,140 L 90,210 Z";
                $smileyY = 360;
                $textY1 = 160;
                $textY2 = 200;
            } elseif ($category === 'slim') {
                $pathData = "M 130,460 L 370,460 L 370,210 L 450,140 L 370,40 L 295,40 L 275,90 L 225,90 L 205,40 L 130,40 L 50,140 L 130,210 Z";
                $smileyY = 350;
                $textY1 = 160;
                $textY2 = 200;
            } else { 
                $pathData = "M 90,360 L 410,360 L 410,190 L 480,130 L 380,30 L 295,30 L 275,80 L 225,80 L 205,30 L 120,30 L 20,130 L 90,190 Z";
                $smileyY = 280;
                $textY1 = 130;
                $textY2 = 165;
            }
        @endphp

        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" style="width: 100%; max-width: 320px; height: auto;">
            
            <path d="{{ $pathData }}" 
                  fill="{{ $tshirt->color?->hex ?? $tshirt->color?->name ?? '#ffffff' }}" 
                  stroke="#1e293b" 
                  stroke-width="4" 
                  stroke-linejoin="round" />
            
            <text x="250" y="{{ $textY1 }}" 
                  text-anchor="middle" 
                  font-family="sans-serif" 
                  font-weight="bold" 
                  font-size="24" 
                  fill="#ffffff"
                  style="text-shadow: 1px 1px 3px rgba(0,0,0,0.6);">
                {{ $tshirt->text_line_1 }}
            </text>

            <text x="250" y="{{ $textY2 }}" 
                  text-anchor="middle" 
                  font-family="sans-serif" 
                  font-size="18" 
                  fill="#ffffff"
                  style="text-shadow: 1px 1px 3px rgba(0,0,0,0.6);">
                {{ $tshirt->text_line_2 }}
            </text>
            
        </svg>
    </div>
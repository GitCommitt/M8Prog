@props(['characters'])

<div class="table-info">
    <table class="character-table" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Race</th>
                <th>Class</th>
                <th>Level</th>
                <th>Mainstat</th>
                <th colspan="3">Abilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach($characters as $character)
                <tr>
                    <td>{{$character['Name']}}</td>
                    <td>{{$character['Race']}}</td>
                    <td>{{$character['Class']}}</td>
                    <td>{{$character['Level']}}</td>
                    <td>{{$character['Mainstat']}}</td>
                        @foreach($character['Abilities'] as $Abilitie)
                            <td>{{$Abilitie}},</td>
                        @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
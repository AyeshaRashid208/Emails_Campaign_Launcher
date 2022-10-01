<table>
    <thead>
        <tr>
            <th>UID</th>
            <th>Subject</th>
            <th>From</th>
            <th>Attachments</th>
        </tr>
    </thead>
    <tbody>
        @if($paginator->count() > 0)
            @foreach($paginator as $oMessage)
                <tr>
                    <td>{{$oMessage->getUid()}}</td>
                    <td>{{$oMessage->getSubject()}}</td>
                    <td>{{$oMessage->getFrom()[0]->mail}}</td>
                    <td>{{$oMessage->getAttachments()->count() > 0 ? 'yes' : 'no'}}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">No messages found</td>
            </tr>
        @endif
    </tbody>
</table>

{{$paginator->links()}}
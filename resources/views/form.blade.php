
<h1>Contact Page</h1>
<form action="{{ route('request.form', ['req'=>1]) }}" method="POST" id="form">
    @csrf
    <input type="hidden" value="" id="input" name="status">
    <!-- <button type="submit">HH</button> -->
</form>

<table>
        <tr>
            <th>Date</th>
            <th>Start Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        
        @foreach ($requests as $request)
        <tr id="{{$request->id}}"> 
        <!-- <td style="display: none" id="{{$request->id}}">{{$request->id}}</td> -->
            <td>{{$request->date}}</td>
            <td>{{$request->start_time}}</td>
            <td>{{$request->status}}</td>
            <td><button onClick="approved(this)">Approved</button><button onClick="reject(this)">Reject</button></td>
        </tr>
        @endforeach

</table>
<script>

function approved(e){
    console.log("Approved is clicked.");
    let num = e.parentNode.parentNode.id
    let form = document.getElementById("form");
    // let action = form.getAttribute("action");
    let id = window.origin + '/update/' + num;
    let set = form.setAttribute("action", id);
    let status = document.getElementById('input').value = 'Approved'

    form.submit();
}

function reject(e){
    console.log("Reject is clicked.");
    let num = e.parentNode.parentNode.id
    let form = document.getElementById("form");
    // let action = form.getAttribute("action");
    let id = window.origin + '/update/' + num;
    let set = form.setAttribute("action", id);
    let status = document.getElementById('input').value = 'Reject'
    form.submit();
}

</script>
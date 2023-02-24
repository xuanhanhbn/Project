<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Student</title>
</head>
<body>
    <form method="post" action="{{url("/student/add")}}" role="form" enctype="multipart/form-data">
        @csrf
        <div>
            @include("input",[
                "label"=>"Name",
                "key"=>"name",
                "type"=>"text",
                "required"=>true
            ])
            @include("input",[
                "label"=>"Age",
                "key"=>"age",
                "type"=>"number",
                "required"=>true
            ])
            @include("input",[
                "label"=>"Address",
                "key"=>"address",
                "type"=>"text",
                "required"=>true
            ])
            @include("input",[
                "label"=>"Telephone",
                "key"=>"telephone",
                "type"=>"text",
                "required"=>true
            ])
        </div>
        <!-- /.card-body -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>
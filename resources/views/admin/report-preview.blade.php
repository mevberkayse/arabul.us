<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arabul.us - Şikayet Preview</title>
    <link href="/assets/admin/css/styles.css" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">


    <table class="table table-striped">
        <tr>
            <td>Şikayet Edilen Kullanıcı:</td> <td>{{$report->reported->name}} ({{$report->reported->id}})</td>
        </tr>
        <tr>
            <td>Şikayet Eden Kullanıcı:</td> <td>{{$report->reporter->name}} ({{$report->reporter->id}})</td>
        </tr>
        <tr>
            <td>Şikayet Konusu:</td> <td>{{$report->report_category}}</td>
        </tr>
        <tr>
            <td>Mesaj:</td> <td>{{$report->text}}</td>
        </tr>
        <tr>
            <td>Şikayet Tarihi:</td> <td>{{$report->created_at->diffForHumans()}}</td>
        </tr>
    </table>

<script>
    let deleteReport = (id) => {
        if (confirm('Şikayeti silmek istediğinize emin misiniz?')) {
            fetch('/admin/sikayet/delete', {
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                }
            }).then(() => {
                location.reload();
            });
        }
    }

    let reportedUserInfo = () => {
        window.open(`/admin/users/{{$report->reported->id}}`, 'popup', 'width=1200,height=1200');
    }

    let reporterUserInfo = () => {
        window.open(`/admin/users/{{$report->reporter->id}}`, 'popup', 'width=1200,height=1200');
    }

</script>
</body>
</html>

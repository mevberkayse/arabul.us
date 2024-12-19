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
        <tbody>
            <tr>
                <td>Profil Resmi</td>
                <td><img src="{{$user->profile_picture}}" height="300px" width="300px"></td>
            </tr>
            <tr>
                <td>Kullanıcı ID</td> <td>{{$user->id}}</td>
            </tr>

            <tr> <td>İsim</td> <td>{{$user->name}}</td></tr>
            <tr> <td>E-Posta Adresi</td> <td>{{$user->email}}</td></tr>
            <tr><td>Kayıt Türü</td> <td>{{$user->google_id !== null ? 'Google' : 'Normal Kayıt'}}</td></tr>
            <tr><td>Onaylı İlan Sayısı</td> <td>{{\App\Models\Listing::where('user_id', $user->id)->count()}}</td></tr>
            <tr><td>Onaysız İlan Sayısı</td> <td>{{\App\Models\Listing::withoutGlobalScopes()->where('user_id', $user->id)->where('status', '!=','1')->count()}}</td></tr>
            <tr><td>Şikayet Eden Kullanıcı Sayısı</td> <td>{{\App\Models\Report::where('reporter_id', $user->id)->count()}}</td></tr>
            <tr><td>Şikayet Edilen Kullanıcı Sayısı</td> <td>{{\App\Models\Report::where('reported_id', $user->id)->count()}}</td></tr>
            <tr>
                <td>Takip Edilen Kullanıcı Sayısı</td>
                <td>{{$user->followings()->count()}}</td>
            </tr>
            <tr>
                <td>Takipçi Sayısı</td>
                <td>{{$user->followers->count()}}</td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>

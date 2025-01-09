<h1>{{ $user->name }}</h1>
<form method="POST" action="/profile/update" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" value="{{ $user->name }}" required>
    <input type="file" name="profile_image">
    <button type="submit">Update Profile</button>
</form>

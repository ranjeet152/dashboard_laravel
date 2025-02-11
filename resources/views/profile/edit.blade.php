@extends('layout.simple-hero')

@section('main-simple-page')

<style> 
    .card {
        width: 90%; 
        max-width: 500px;
        background: white;
        padding: 25px; 
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }
    .header {
        text-align: center;
        font-size: 24px;
        font-weight: bold; 
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
    label {
        font-weight: bold;
        flex: 1 1 100%;
        display: flex;
        align-items: center;
    }
    .icon {
        margin-right: 8px;
        font-size: 18px;
        color: #888;
    }
    .form-group input {
        flex: 1 1 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px;
        width: 100%;
    }
    .btn-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        margin-top: 20px;
    }
    .btn {
        width: 100%;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        text-align: center;
    }
    .back {
        margin-top: 70px;
        background: #fff;
    }
    .btn-save {
        background-color: #28a745;
        color: white;
    }
    .btn-cancel {
        background-color: #dc3545;
        color: white;
        text-decoration: none;
    }
    @media (min-width: 768px) {
        .form-group {
            flex-wrap: nowrap;
        }
        label {
            flex: 1;
        }
        .form-group input {
            flex: 2;
        }
        .btn-container {
            flex-direction: row;
            justify-content: space-between;
        }
        .btn {
            width: 48%;
        }
    }
</style>
<div class="back"> 
<div class="card">
    <div class="header">Edit Profile</div>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><i class="icon fas fa-user"></i> Username:</label>
            <input type="text" name="username" value="{{ $user->username }}" required>
        </div>
        <div class="form-group">
            <label><i class="icon fas fa-user-tie"></i> Father's Name:</label>
            <input type="text" name="fathername" value="{{ $user->fathername }}" required>
        </div>
        <div class="form-group">
            <label><i class="icon fas fa-female"></i> Mother's Name:</label>
            <input type="text" name="mothername" value="{{ $user->mothername }}" required>
        </div>
        <div class="form-group">
            <label><i class="icon fas fa-phone"></i> Phone Number:</label>
            <input type="text" name="phone" value="{{ $user->phone }}" required>
        </div>
        <div class="form-group">
            <label><i class="icon fas fa-calendar-alt"></i> Date of Birth:</label>
            <input type="date" name="dob" value="{{ $user->dob }}" required>
        </div> 
        <div class="form-group">
            <label><i class="icon fas fa-image"></i> Profile Image:</label>
            <input type="file" name="image" id="imageInput" accept="image/*" onchange="previewImage(event)">
            <br>
            <img id="imagePreview" src="" alt="Image Preview" style="display:none; width: 150px; height: 150px; margin-top: 10px; border-radius: 5px; border: 1px solid #ddd;">
        </div>
        <div class="btn-container">
            <button type="submit" class="btn btn-save">Save</button>
            <a href="{{ route('profile.view') }}" class="btn btn-cancel">Cancel</a>
        </div>
    </form>
</div>
</div>
<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('imagePreview');
        output.src = reader.result;
        output.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>

@endsection

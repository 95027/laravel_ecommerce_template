@extends('admin.layout.master')
@section('content')

<div class="select-menu">
    <div class="select-btn">
        <span class="sBtn-text">Select option</span>
        <i class="bx bx-chevron-down"></i>
    </div>
    <ul class="options">
        <li class="option">
            <i class="bx bxl-github" style="color: #171515"></i>
            <span class="option-text">Github</span>
        </li>
        <li class="option">
            <i class="bx bxl-instagram-alt" style="color: #171515"></i>
            <span class="option-text">Instagram</span>
        </li>
        <li class="option">
            <i class="bx bxl-facebook" style="color: #171515"></i>
            <span class="option-text">Facebook</span>
        </li>
    </ul>
</div>
@endsection

@section('script')
<script>
    const optionMenu = document.querySelector(".select-menu"),
    selectBtn = optionMenu.querySelector(".select-btn"),
    options = optionMenu.querySelector(".option"),
    sBtn_text = optionMenu.querySelector(".sBtn-text");

    options.forEach(option =>{
        console.log(option);
        
    })
</script>
@endsection
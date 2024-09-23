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
            options = optionMenu.querySelectorAll(".option"),
            sBtn_text = optionMenu.querySelector(".sBtn-text");

        selectBtn.addEventListener("click", () => {
            optionMenu.classList.toggle("active");
        });

        // Loop through options and set the selected text
        options.forEach(option => {
            option.addEventListener("click", () => {
                let selectedOption = option.querySelector(".option-text").innerText;
                sBtn_text.innerText = selectedOption;

                // Hide the menu after selection
                optionMenu.classList.remove("active");
            });
        });
    </script>
@endsection

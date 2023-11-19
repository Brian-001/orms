@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4 text-center">Frequently Asked Questions</h1>

            <div class="accordion">
                <!-- Question 1 -->
                <div class="accordion-item">
                    <input type="checkbox" id="faq1" class="accordion-trigger">
                    <label for="faq1" class="accordion-title">What is the purpose of this project?</label>
                    <div class="accordion-content">
                        <p class="mb-4">The purpose of this project is to...</p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="accordion-item">
                    <input type="checkbox" id="faq2" class="accordion-trigger">
                    <label for="faq2" class="accordion-title">How can I create a new product?</label>
                    <div class="accordion-content">
                        <p class="mb-4">To create a new product, follow these steps...</p>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="accordion-item">
                    <input type="checkbox" id="faq3" class="accordion-trigger">
                    <label for="faq3" class="accordion-title">Is there a limit to the number of products I can create?</label>
                    <div class="accordion-content">
                        <p class="mb-4">No, there is no limit to the number of products you can create...</p>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="accordion-item">
                    <input type="checkbox" id="faq4" class="accordion-trigger">
                    <label for="faq4" class="accordion-title">How can I edit my product information?</label>
                    <div class="accordion-content">
                        <p class="mb-4">To edit your product information, navigate to the...</p>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="accordion-item">
                    <input type="checkbox" id="faq5" class="accordion-trigger">
                    <label for="faq5" class="accordion-title">Can I delete a product?</label>
                    <div class="accordion-content">
                        <p class="mb-4">Yes, you can delete a product by...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom styles for the accordion */
        .accordion {
            list-style: none;
            padding: 0;
        }

        .accordion-item {
            border-bottom: 1px solid #ddd;
        }

        .accordion-trigger {
            display: none;
        }

        .accordion-title {
            display: block;
            padding: 1rem;
            cursor: pointer;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .accordion-trigger:checked + .accordion-title + .accordion-content {
            max-height: 1000px; /* Adjust this value based on your content height */
            transition: max-height 0.5s ease-in;
        }
    </style>
@endsection

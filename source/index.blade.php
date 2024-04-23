---
title: Home
description: Home Page
---
@extends('_layouts.main')

@section('body')
    <div class="relative isolate overflow-hidden bg-gradient-to-b from-indigo-100/20 pt-14">
        <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96"
            aria-hidden="true"></div>
        <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:col-span-2 xl:col-auto font-lato">Let us help you fly your business...</h1>
                <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                    <p class="text-lg leading-8 text-gray-600">We are your trusted partner in navigating the complexities of IT security.
                        Our expert team delivers tailored cybersecurity solutions, empowering you to focus on growth while we ensure your company's digital well-being.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-cp_green px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-cp_lightblue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a> --}}
                    </div>
                </div>
                <img src="assets/images/copilot-stack.svg" alt=""
                    class="mt-10 w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-6">
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
    </div>
    <div class="py-10 sm:py-18 bg-gray-200">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl lg:text-center">
                {{-- <h2 class="text-base font-semibold leading-7 text-cp_darkblue">Trusted Advisors</h2> --}}
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need to securly support your business.</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Comprehensive IT solutions focused on proactive maintenance, robust cybersecurity, and
                    responsive support to keep your business running smoothly and securely.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <svg class="h-5 w-5 flex-none text-cp_lightblue" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                    clip-rule="evenodd" />
                            </svg>
                            Proactive Maintenance
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Regular monitoring, updates, and optimization of your IT infrastructure to prevent potential issues and ensure peak
                                performance.</p>
                            <p class="mt-6">
                                {{-- <a href="#" class="text-sm font-semibold leading-6">Learn more <span aria-hidden="true">→</span></a> --}}
                            </p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <svg class="h-5 w-5 flex-none text-cp_lightblue" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Robust Cybersecurity
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">We implement and manage advanced security measures, including firewalls, threat detection, and employee training, to protect your
                                business from cyber threats.</p>
                            <p class="mt-6">
                                {{-- <a href="#" class="text-sm font-semibold leading-6">Learn more <span aria-hidden="true">→</span></a> --}}
                            </p>
                        </dd>
                    </div>
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                            <svg class="h-5 w-5 flex-none text-cp_lightblue" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z"
                                    clip-rule="evenodd" />
                            </svg>
                            Responsive Support
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-600">
                            <p class="flex-auto">Our experienced technicians are available round-the-clock to provide prompt, reliable support and quickly resolve any IT issues that
                                may arise.</p>
                            <p class="mt-6">
                                {{-- <a href="#" class="text-sm font-semibold leading-6">Learn more <span aria-hidden="true">→</span></a> --}}
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Take control of your IT security and unlock your business's potential with Copilot Managed
                    Services. </h2>
                <p class="mx-auto mt-6 max-w-3xl text-lg leading-8 text-gray-600">Schedule a no-obligation consultation with our expert team today, and discover how our tailored
                    solutions can protect your company, streamline your operations, and support your growth. Don't wait until it's too late – contact us now to start your journey
                    towards a secure and thriving future.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-cp_green px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-cp_lightblue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

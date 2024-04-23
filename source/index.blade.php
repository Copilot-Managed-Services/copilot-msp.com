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
                        <a href="mailto:info@copilot-msp.com" target="_new"
                            class="rounded-md bg-cp_green px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-cp_lightblue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a> --}}
                    </div>
                </div>
                <img src="assets/images/copilot-stack.svg" alt=""
                    class="mt-10 w-3/4 max-w-lg rounded-2xl object-cover mx-10 sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-6">
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
    </div>
    <div class="py-10 sm:py-18 bg-gray-200">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl lg:text-center">
                {{-- <h2 class="text-base font-semibold leading-7 text-cp_darkblue">Trusted Advisors</h2> --}}
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl font-lato">Everything you need to securly support your business.</p>
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
                            <p class="flex-auto">Advanced security measures, including firewalls, threat detection, and employee training, to protect your
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
    <section class="isolate overflow-hidden bg-white px-6 lg:px-8">
        <div class="relative mx-auto max-w-2xl py-24 sm:py-32 lg:max-w-4xl">
            <div class="absolute left-1/2 top-0 -z-10 h-[50rem] w-[90rem] -translate-x-1/2 bg-[radial-gradient(50%_100%_at_top,theme(colors.indigo.100),white)] opacity-20 lg:left-36">
            </div>
            <div
                class="absolute inset-y-0 right-1/2 -z-10 mr-12 w-[150vw] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-20 md:mr-0 lg:right-full lg:-mr-36 lg:origin-center">
            </div>
            <figure class="grid grid-cols-1 items-center gap-x-6 gap-y-8 lg:gap-x-10">
                <div class="relative col-span-2 lg:col-start-1 lg:row-start-2">
                    <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -top-12 left-0 -z-10 h-32 stroke-gray-900/10">
                        <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb"
                            d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                        <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
                    </svg>
                    <blockquote class="text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>"At Copilot Managed Services, we're different from other IT providers. We're your partners, working with you to handle technology challenges while you focus
                            on growing your business. Think of us as your copilot – together, we'll reach new heights."</p>
                    </blockquote>
                </div>
                {{-- <div class="col-end-1 w-16 lg:row-span-4 lg:w-72">
                    <img class="rounded-xl bg-indigo-50 lg:rounded-3xl"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=576&h=576&q=80"
                        alt="">
                </div> --}}
                <figcaption class="text-base lg:col-start-1 lg:row-start-3">
                    <div class="font-semibold text-gray-900">Alex Nearing</div>
                    <div class="mt-1 text-gray-500">CEO</div>
                </figcaption>
            </figure>
        </div>
    </section>

    <div class="bg-gray-200">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl font-lato">Take control of your IT security and unlock your business's potential with Copilot
                    Managed Services. </h2>
                <p class="mx-auto mt-6 max-w-3xl text-lg leading-8 text-gray-600">Schedule a no-obligation consultation with our expert team today, and discover how our tailored
                    solutions can protect your company, streamline your operations, and support your growth. Don't wait until it's too late – contact us now to start your journey
                    towards a secure and thriving future.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="mailto:info@copilot-msp.com" target="_new"
                        class="rounded-md bg-cp_green px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-cp_lightblue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

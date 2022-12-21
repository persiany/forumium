<div class="relative lg:hidden flex items-start">
    <div x-cloak wire:ignore :class="{'w-64': sidebarOpen, 'w-0': !sidebarOpen}" class="fixed top-0 bottom-0 left-0 z-30 block w-64 h-full min-h-screen overflow-y-auto text-slate-400 transition-all duration-300 ease-in-out bg-white border-r border-slate-100 shadow-lg overflow-x-hidden">

        <div class="flex flex-col items-stretch justify-between h-full">
            <div class="flex flex-col flex-shrink-0 w-full">
                <div class="flex items-center justify-start p-3 gap-2 h-[80px] border-b border-slate-200 bg-white z-50 sticky top-0 left-0 right-0">
                    <button @click="sidebarOpen = false" class="inline-flex items-center p-2 text-sm text-slate-500 rounded-lg md:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200 dark:text-slate-400 dark:hover:bg-slate-700 dark:focus:ring-slate-600">
                        <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current" :class="{'text-slate-600': !sidebarOpen, 'text-slate-500': sidebarOpen}">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('favicon.svg') }}" class="h-6 mr-3 sm:h-9" alt="Logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-slate-500">Forumium</span>
                    </a>
                </div>

                <nav class="mt-5 overflow-auto">
                    <div class="flex-grow md:block md:overflow-y-auto overflow-x-hidden" :class="{'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen}">
                        <div class="flex-col w-full px-5 mt-5">
                            <button type="button" data-modal-toggle="add-discussion-modal" class="bg-blue-500 hover:bg-blue-600 hover:cursor-pointer px-3 py-2 rounded shadow hover:shadow-lg text-white font-medium text-center">
                                Start a Discussion
                            </button>
                            <div class="w-full flex flex-col gap-5 my-8">
                                <a href="/discussions.html" class="w-full flex items-center text-blue-500 font-medium">
                                    <span class="w-[30px]"><i class="fa-regular fa-comments"></i></span>
                                    <span>All discussions</span>
                                </a>
                                <a href="/tags.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px]"><i class="fa-solid fa-table-cells-large"></i></span>
                                    <span>Tags</span>
                                </a>
                            </div>
                            <div class="w-full flex flex-col gap-5 mb-20">
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-stone-500"><i class="fa-solid fa-vial"></i></span>
                                    <span>Test Posting</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-blue-500"><i class="fa-solid fa-wrench"></i></span>
                                    <span>Support</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-red-500"><i class="fa-solid fa-bullhorn"></i></span>
                                    <span>Meta</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-purple-500"><i class="fa-solid fa-hand-holding-heart"></i></span>
                                    <span>Praise</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-rose-500"><i class="fa-solid fa-check-to-slot"></i></span>
                                    <span>Proposals</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-green-500"><i class="fa-solid fa-plug"></i></span>
                                    <span>Extensions</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-neutral-500"><i class="fa-solid fa-code"></i></span>
                                    <span>Dev</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-slate-500"><i class="fa-solid fa-suitcase"></i></span>
                                    <span>Resources</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-orange-500"><i class="fa-solid fa-quote-right"></i></span>
                                    <span>Off-topic</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-purple-500"><i class="fa-solid fa-comment-dots"></i></span>
                                    <span>Feedback</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-green-500"><i class="fa-solid fa-check"></i></span>
                                    <span>Solved</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-slate-500"><i class="fa-solid fa-diagram-project"></i></span>
                                    <span>Integrations</span>
                                </a>
                                <a href="/discussions.html" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                                    <span class="w-[30px] text-slate-500"><i class="fa-solid fa-flag"></i></span>
                                    <span>Reported</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

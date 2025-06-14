<style>
    /* Sidebar styles */
    .sidebar {
        position: fixed;
        top: 4rem;
        /* below the fixed navigation bar */
        left: 0;
        height: calc(100vh - 4rem);
        width: 3.5rem;
        background: #fff;
        border-right: 1px solid #e5e7eb;
        transition: width 0.2s;
        z-index: 40;
        /* lower than nav bar */
        overflow-x: hidden;
    }

    .sidebar:hover {
        width: 14rem;
        box-shadow: 2px 0 8px rgba(0, 0, 0, 0.04);
    }

    .sidebar-content {
        opacity: 0;
        transition: opacity 0.2s;
        padding: 1rem 0.5rem;
    }

    .sidebar:hover .sidebar-content {
        opacity: 1;
    }

    .sidebar-link {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 0.5rem;
        border-radius: 0.5rem;
        color: #374151;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.15s, color 0.15s;
    }

    .sidebar-link:hover,
    .sidebar-link.active {
        background: #f3f4f6;
        color: #2563eb;
    }

    .sidebar-icon {
        min-width: 1.5rem;
        min-height: 1.5rem;
        width: 1.5rem;
        height: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidebar-label {
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.2s;
    }

    .sidebar:hover .sidebar-label {
        opacity: 1;
    }

    @media (max-width: 640px) {
        .sidebar {
            display: none;
        }
    }

    .sidebar-hover {
        width: 3rem; /* collapsed */
        transition: width 0.2s;
    }
    .sidebar-hover:hover {
        width: 10rem; /* expanded */
    }
    .sidebar-label {
        opacity: 0;
        transition: opacity 0.2s, margin 0.2s;
        margin-left: 0;
        white-space: nowrap;
    }
    .sidebar-hover:hover .sidebar-label {
        opacity: 1;
        margin-left: 0.5rem;
    }
</style>
{{-- <div class="fixed top-16 left-0 h-[calc(100vh-4rem)] w-56 bg-white border-r border-gray-200 z-40 flex flex-col items-start py-4">
    <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-md text-gray-700 hover:bg-gray-100 hover:text-blue-600 font-medium w-full">
        <!-- Heroicon: User Add -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2.25 3.75A6.75 6.75 0 1 1 15 6.75m-6.75 12A6.75 6.75 0 0 1 15 6.75" />
        </svg>
        <span>Register Child</span>
    </a>
    <p class="text-black">test</p>
    <!-- Future sidebar links go here -->
</div> --}}

<div class="fixed left-0 top-[8.6rem] h-[calc(100vh-8.6rem)] bg-white border-r border-gray-200 z-40 flex flex-col items-start m-0 p-0 sidebar-hover overflow-x-hidden">
    <a href="#" class="flex items-center px-3 py-6 rounded-md text-gray-700 hover:bg-gray-100 hover:text-blue-600 font-medium w-full">
        <!-- Heroicon: User Add -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 min-w-[1.5rem]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2.25 3.75A6.75 6.75 0 1 1 15 6.75m-6.75 12A6.75 6.75 0 0 1 15 6.75" />
        </svg>
        <span class="sidebar-label">Register Child</span>
    </a>
    <!-- Future sidebar links go here -->
</div>
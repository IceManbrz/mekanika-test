<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Models Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;  
            scrollbar-width: none;  
        }
        .custom-sidebar-bg {
            background-color: #30334a; 
        }
        .custom-navbar-bg {
            background-color: #30334a; 
        }
        .custom-hover:hover {
            background-color: #495057; 
        }
        .dropdown-menu {
            background-color: #30334a; 
        }
        .sidebar-text {
            color: #ffffff; 
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex">

        <div class="w-64 custom-sidebar-bg h-screen flex flex-col justify-between">
            <div class="p-4 flex-grow overflow-y-auto scrollbar-hide">
                <div class="text-center mb-8">
                <img src="{{ asset('images/svg/image.png') }}" alt="Logo" class="w-35 mx-2">
                </div>
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/dashboard-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-4">
                        <button class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text w-full text-left" onclick="toggleDropdown('masterDataDropdown')">
                        <img src="{{ asset('images/svg/master-data-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Master Data
                            <span class="ml-auto"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <ul id="masterDataDropdown" class="hidden pl-6 dropdown-menu">
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/access-level-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Access Level
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/user-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Users
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/machine-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Machines
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/model-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Models
                                </a>
                            </li>
                            <li class="mb-2">
                            <a href="{{ route('parts.index') }}" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/part-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Parts
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/dies-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Dies
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/cart-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Carts
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/client-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Clients
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/reject-reason-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Reject Reason
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/information-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Information
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/transaction-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Transaction
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/report-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Report
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Navbar Atas -->
            <div class="custom-navbar-bg p-4 flex justify-between items-center text-white">
                <div class="flex">
                <img src="{{ asset('images/svg/master-data-dark.png') }}" alt="Logo" class="w-5 mx-2">
                    <h1 class="font-semibold text-lg">Master Data</h1>
                </div>
                <div class="flex items-center">
                    <div class="mr-4">
                        <span id="currentDate">12 Agustus 2024</span>
                    </div>
                    <div class="mr-4">
                        <span class="mr-2"><i class="fas fa-sun"></i></span> 
                    </div>
                    <div class="mr-4">
                        <span class="mr-2"><i class="fas fa-phone"></i></span> 
                    </div>
                    <div class="mr-4">
                    <img src="{{ asset('images/svg/user-dark.png') }}" alt="Logo" class="w-5 mx-2">
                    </div>
                </div>
            </div>
            <div class="p-6 bg-gray-100">
    <div class="bg-white shadow-md rounded mb-0"> 
        <div class="flex justify-end items-center">
            <h1 class="ml-4">Models</h1>
        <div class="mr-60"></div>
        <div class="mr-60"></div>
            <input type="text" placeholder="Search Models..." class="border border-gray-300 rounded p-2 flex-grow" />
            <button id="openModal" class="bg-blue-500 text-white py-2 px-4 rounded ml-2">
                Add New Model
            </button>
        </div>
    </div>
    <div class="p-0 bg-gray-100 h-full overflow-y-auto"> 
        <div class="bg-white shadow-md rounded">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Model Name</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">1</td>
                        <td class="py-3 px-6 text-left">KVB</td>
                        <td class="py-3 px-6 text-left">Beat 120</td>
                        <td class="py-3 px-6 text-center">
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                            <a href="#" id="editButton" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" id="deleteButton" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="p-4 text-sm text-left text-black mt-20">
                Achareeya Wicaksa P
            </div>
</div>
<div id="editPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
        <h2 class="text-xl font-semibold mb-4">Edit Model</h2>
        <form id="editForm">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter model name" class="border border-gray-300 rounded p-2 w-full" required />
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description" placeholder="Enter model description" class="border border-gray-300 rounded p-2 w-full" required></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" id="cancelEdit" class="bg-gray-300 text-gray-700 py-2 px-4 rounded mr-2">Cancel</button>
                <button type="submit" id="saveEdit" class="bg-blue-500 text-white py-2 px-4 rounded">Save</button>
            </div>
        </form>
    </div>
</div>
<div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
        <h2 class="text-xl font-semibold mb-4">Add Model</h2>
        <form id="modelForm">
            <div class="mb-4">
                <label for="modelName" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="modelName" placeholder="Enter model name" class="border border-gray-300 rounded p-2 w-full" required />
            </div>
            <div class="mb-4">
                <label for="modelDescription" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="modelDescription" placeholder="Enter model description" class="border border-gray-300 rounded p-2 w-full" rows="4" required></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" id="closeModal" class="bg-gray-300 text-gray-700 py-2 px-4 rounded mr-2">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Save</button>
            </div>
        </form>
    </div>
</div>
<div id="confirmDeletePopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3 text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/1214/1214890.png" alt="Trash" class="w-16 h-16 mx-auto mb-4" />
        <h2 class="text-xl font-semibold mb-4">Are you sure you want to delete this item?</h2>
        <div class="flex justify-center">
            <button id="cancelDelete" class="bg-gray-300 text-gray-700 py-2 px-4 rounded mr-2">Cancel</button>
            <button id="confirmDelete" class="bg-red-500 text-white py-2 px-4 rounded">Delete</button>
        </div>
    </div>
</div>

    <script>
    const editPopup = document.getElementById('editPopup');
    const editButton = document.getElementById('editButton');
    const cancelEditButton = document.getElementById('cancelEdit');
    const editForm = document.getElementById('editForm');

    editButton.addEventListener('click', (event) => {
        event.preventDefault(); 
        document.getElementById('name').value = 'KVB'; 
        document.getElementById('description').value = 'Beat 120'; 

        editPopup.classList.remove('hidden'); 
    });

    cancelEditButton.addEventListener('click', () => {
        editPopup.classList.add('hidden'); 
    });

    editForm.addEventListener('submit', (event) => {
        event.preventDefault(); 

        const name = document.getElementById('name').value;
        const description = document.getElementById('description').value;

        console.log("Updated Name:", name); 
        console.log("Updated Description:", description);

        editPopup.classList.add('hidden'); 
    });
    const confirmDeletePopup = document.getElementById('confirmDeletePopup');
    const deleteButton = document.getElementById('deleteButton');
    const cancelDeleteButton = document.getElementById('cancelDelete');
    const confirmDeleteButton = document.getElementById('confirmDelete');

    deleteButton.addEventListener('click', (event) => {
        event.preventDefault(); 
        confirmDeletePopup.classList.remove('hidden'); 
    });

    cancelDeleteButton.addEventListener('click', () => {
        confirmDeletePopup.classList.add('hidden'); 
    });

    confirmDeleteButton.addEventListener('click', () => {
        console.log("Item deleted"); 
        confirmDeletePopup.classList.add('hidden'); 
    });
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }

        document.getElementById('currentDate').innerText = new Date().toLocaleDateString('us-US', {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const modelForm = document.getElementById('modelForm');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    modelForm.addEventListener('submit', (event) => {
        event.preventDefault(); 
        modal.classList.add('hidden'); a
    });
    </script>
</body>
</html>

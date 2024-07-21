import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Table from "@/Components/Table.jsx";
import UpdatePizzaOrderForm from "@/Pages/Pizza/Partials/UpdatePizzaOrderForm.jsx";


const columns = [
    'size',
    'chef',
    'status'
];

export default function Index({ auth, pizza }){

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Order #{pizza.id}</h2>}
        >
            <Head title={"Order #" + pizza.id} />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                        <UpdatePizzaOrderForm pizza={pizza} className={"max-w-xl"}></UpdatePizzaOrderForm>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    )

}

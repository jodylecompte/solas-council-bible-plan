import ApplicationLogo from "@/Components/ApplicationLogo";
import { Link } from "@inertiajs/react";
import { PropsWithChildren } from "react";
import { usePage } from "@inertiajs/react";
// import { PageProps } from "@inertiajs/react";
import { PageProps } from "@/types";

interface User {
    id: number;
    name: string;
    email: string;
}

interface CustomPageProps extends PageProps {
    authUser: User | null; // It could be null if the user isn't logged in
    canLogin: boolean;
    canRegister: boolean;
}

export function Layout({ children }: PropsWithChildren) {
    const { authUser, canLogin, canRegister } =
        usePage<CustomPageProps>().props;
    return (
        <>
            <header className="bg-[#7C2424] text-white p-8">
                <h1 className="text-2xl font-bold">
                    The Solas Council Reformed Bible Study Plan
                </h1>
                <nav>
                    <div>
                        <h1>Welcome to the Reformed Bible Study Plan</h1>
                        {authUser ? (
                            <p>Hello, {authUser.name}!</p>
                        ) : (
                            <p>
                                Please <a href="/login">login</a> or{" "}
                                <a href="/register">register</a>.
                            </p>
                        )}
                    </div>
                </nav>
            </header>
            <main className="flex-grow">{children}</main>
            <footer className="bg-[#7C2424] text-white p-10">
                <div className="text-center">
                    Coded with ❤️ by{" "}
                    <a href="https://jodylecompte.com">Jody LeCompte</a>
                </div>
            </footer>
        </>
    );
}

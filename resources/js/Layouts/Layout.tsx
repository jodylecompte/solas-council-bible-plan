import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/react';
import { PropsWithChildren, useState } from 'react';
import { usePage } from '@inertiajs/react';
// import { PageProps } from "@inertiajs/react";
import { PageProps } from '@/types';
import { Header } from './Header';

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
  const { authUser, canLogin, canRegister } = usePage<CustomPageProps>().props;

  return (
    <>
      <Header authUser={authUser} />
      <main className="flex-grow py-8 px-32">{children}</main>
      <footer className="bg-[#7C2424] text-white p-10">
        <div className="text-center">
          Coded with ❤️ by <a href="https://jodylecompte.com">Jody LeCompte</a>
          <br />
          <br />
          This is an open source community effort that is not directly affiliated with The Solas Council.
        </div>
      </footer>
    </>
  );
}

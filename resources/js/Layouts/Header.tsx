import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/react';
import { useState } from 'react';
import { useAuth } from '@/Context/AuthContext';

export const Header = (props: any) => {
  const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
  const { user } = useAuth();

  const AuthNavItems = () => <div>Logged In</div>;
  const GuestNavItems = () => <div>Guest</div>;

  return (
    <header className="bg-[#7C2424] text-white p-8 px-32 flex justify-between items-center">
      <h1 className="text-2xl font-bold">
        <Link href="/">The Solas Council Reformed Bible Study Plan</Link>
      </h1>
      <nav className="flex gap-7">
        <Link href="/about">About</Link>
        <Link href="/dashboard">Plan</Link>
        {user && <Link href="/profile">Profile</Link>}
        {!user && <Link href="/login">Login</Link>}
      </nav>
    </header>
  );
};

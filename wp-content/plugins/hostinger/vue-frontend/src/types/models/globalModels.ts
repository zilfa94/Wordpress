import { Header } from "@/types";
export const Colors = [
  "primary",
  "primary-light",
  "primary-dark",
  "white",
  "gray",
  "gray-light",
  "gray-dark",
  "gray-border",
  "success",
  "success-light",
  "success-dark",
  "info-light",
  "danger",
  "danger-light",
  "danger-dark",
  "warning",
  "warning-light",
  "warning-dark",
  "warning-dark-2",
  "meteorite",
  "meteorite-light",
  "meteorite-dark",
  "light",
  "dark",
  "white-blue",
  "primary-timer",
  "black-timer",
  "transparent",
] as const;

export type Color = (typeof Colors)[number];

export type HeaderButton = {
  text: string;
  href: string;
  onClick?: () => void;
};

export type PreviewSiteButton = {
    text: string;
    href: string;
    onClick?: () => void;
};

export type EditSiteButton = {
    text: string;
    href: string;
    onClick?: () => void;
};

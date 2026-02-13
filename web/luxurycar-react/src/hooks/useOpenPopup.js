import { usePopup } from "../contexts/PopupContext";

export const useOpenPopup = () => {
  const { openPopup } = usePopup();

  return (e) => {
    if (e) e.preventDefault();
    openPopup();
  };
};

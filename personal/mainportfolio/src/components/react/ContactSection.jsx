import React from "react";
import "./ContactSection.css";

const translations = {
  en: {
    titleForm: "Write me:",
    labels: {
      name: "Name",
      email: "Email",
      message: "Message",
    },
    placeholders: {
      name: "Enter your name",
      email: "your.email@example.com",
      message: "Describe your problem",
    },
    submit: "Send Message →",
    titleInfo: "Contact Information",
    important: "Important!",
    info1:
      "I don’t use social networks and prefer to minimize publicity. You can reach me by email or Telegram.",
    info2:
      "All my projects are hosted on GitHub and deployed on Netlify (or other services). You can test any project live.",
  },
  ru: {
    titleForm: "Написать мне:",
    labels: {
      name: "Имя",
      email: "Email",
      message: "Сообщение",
    },
    placeholders: {
      name: "Напишите свое имя",
      email: "your.email@example.com",
      message: "Опишите свою проблему",
    },
    submit: "Отправить Сообщение →",
    titleInfo: "Контактная информация",
    important: "Важно!",
    info1:
      "Я не веду социальные сети и предпочитаю минимизировать публичность. Для связи доступны электронная почта и Telegram.",
    info2:
      "Все мои проекты размещены на GitHub и развернуты на Netlify (или других сервисах). Любой проект можно протестировать вживую.",
  },
};

const ContactSection = ({ lang = "en" }) => {
  const t = translations[lang] || translations.en;

  return (
    <section className="contact-section">
      <div className="container">
        <div className="contact-grid">
          <div className="contact-form">
            <h2>{t.titleForm}</h2>

            <form>
              <label>{t.labels.name}</label>
              <input type="text" placeholder={t.placeholders.name} required />

              <label>{t.labels.email}</label>
              <input type="email" placeholder={t.placeholders.email} required />

              <label>{t.labels.message}</label>
              <textarea
                placeholder={t.placeholders.message}
                required
              ></textarea>

              <button type="submit" className="btn-submit">
                {t.submit}
              </button>
            </form>
          </div>

          <div className="contact-info">
            <h2>{t.titleInfo}</h2>

            <div className="email">
              <p>
                <strong className="red-text">Email:</strong>{" "}
                crashtheroutines@gmail.com
              </p>
            </div>

            <div className="add">
              <h3>{t.important}</h3>
              <p>{t.info1}</p>
              <p>{t.info2}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;

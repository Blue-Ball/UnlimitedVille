window.fcWidget.init({
    token: "28318a89-667a-4668-8c3d-b5e5d7137aa0",
    host: "https://wchat.freshchat.com",
    config: {
        disableEvents: true,
        cssNames: {
            widget: 'fc_frame',
            open: 'fc_open',
            expanded: 'fc_expanded'
        },

        showFAQOnOpen: true,
        hideFAQ: true,
        agent: {
            hideName: true,
            hidePic: true,
            hideBio: true,
        },
        headerProperty: {
            //If you have multiple sites you can use the appName and appLogo to overwrite the values.
            appName: 'Team Unlimitedville',
            appLogo: '/favicon.ico',
            backgroundColor: '#00cf8c',
            foregroundColor: '#FFFFFF',
        },
        content: {
            placeholders: {
                search_field: 'Search',
                reply_field: 'Reply',
                csat_reply: 'Add your comments here'
            },
            actions: {
                csat_yes: 'Yes',
                csat_no: 'No',
                push_notify_yes: 'Yes',
                push_notify_no: 'No',
                tab_faq: 'Solutions',
                tab_chat: 'Chat',
                csat_submit: 'Submit'
            },
            headers: {
                chat: 'Chat with Us',
                chat_help: 'Reach out to us if you have any questions',
                faq: 'Solution Articles',
                faq_help: 'Browse our articles',
                faq_not_available: 'No Articles Found',
                faq_search_not_available: 'No articles were found for {{query}}',
                faq_useful: 'Was this article helpful?',
                faq_thankyou: 'Thank you for your feedback',
                faq_message_us: 'Message Us',
                push_notification: 'Don\'t miss out on any replies! Allow push notifications?',
                csat_question: 'Did we address your concerns??',
                csat_yes_question: 'How would you rate this interaction?',
                csat_no_question: 'How could we have helped better?',
                csat_thankyou: 'Thanks for the response',
                csat_rate_here: 'Submit your rating here',
                channel_response: {
                    offline: 'We are currently away. Please leave us a message',
                    online: {
                        minutes: {
                            one: "How can we help? Representatives available now. ",
                            more: "How can we help? Representatives available now."
                        },
                        hours: {
                            one: "How can we help? Representatives available now.",
                            more: "How can we help? Representatives available now.",
                        }
                    }
                }
            }
        }
    }
});

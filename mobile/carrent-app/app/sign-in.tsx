// app/sign-in.tsx
import React, { useState } from "react";
import {
  View,
  Text,
  TextInput,
  TouchableOpacity,
  ScrollView,
  StyleSheet,
  SafeAreaView,
} from "react-native";
import { router, Link } from "expo-router";
import CustomTextInput from "@/components/ui/CustomTextInput";

interface SignInFormData {
  email: string;
  password: string;
}

export default function SignInScreen() {
  const [formData, setFormData] = useState<SignInFormData>({
    email: "",
    password: "",
  });

  const handleSignIn = (): void => {
    console.log("Signing in with:", formData);
    // After logging in, we redirect you to the main page.
    router.replace("/");
  };

  return (
    <SafeAreaView style={styles.container}>
      <ScrollView
        contentContainerStyle={styles.scrollContainer}
        showsVerticalScrollIndicator={false}
      >
        {/* Back button */}
        <TouchableOpacity
          style={styles.backButton}
          onPress={() => router.back()}
        >
          <Text style={styles.backButtonText}>← Back</Text>
        </TouchableOpacity>

        {/* Headline */}
        <Text style={styles.title}>Sign in</Text>

        {/* Form */}
        <View style={styles.formContainer}>
          <CustomTextInput
            placeholder="Email"
            value={formData.email}
            onChangeText={(text: string) =>
              setFormData({ ...formData, email: text })
            }
            keyboardType="email-address"
            autoCapitalize="none"
          />

          <CustomTextInput
            placeholder="Password"
            value={formData.password}
            onChangeText={(text: string) =>
              setFormData({ ...formData, password: text })
            }
            secureTextEntry
          />
        </View>

        {/* Login button */}
        <TouchableOpacity
          style={styles.signInButton}
          onPress={handleSignIn}
          activeOpacity={0.8}
        >
          <Text style={styles.signInButtonText}>Sign In</Text>
        </TouchableOpacity>

        {/* Registration link */}
        <View style={styles.signUpContainer}>
          <Text style={styles.signUpText}>
            Don't have an account?{" "}
            <Link href="/sign-up" style={styles.signUpLink}>
              Sign up
            </Link>
          </Text>
        </View>
      </ScrollView>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
  },
  scrollContainer: {
    flexGrow: 1,
    paddingHorizontal: 20,
    paddingVertical: 30,
  },
  backButton: {
    alignSelf: "flex-start",
    marginBottom: 20,
    padding: 8,
  },
  backButtonText: {
    fontSize: 16,
    color: "#007AFF",
  },
  title: {
    fontSize: 32,
    fontWeight: "bold",
    marginBottom: 30,
    color: "#000",
  },
  formContainer: {
    marginBottom: 20,
  },
  signInButton: {
    backgroundColor: "#007AFF",
    borderRadius: 8,
    paddingVertical: 16,
    alignItems: "center",
    marginTop: 10,
    marginBottom: 30,
  },
  signInButtonText: {
    color: "#fff",
    fontSize: 18,
    fontWeight: "600",
  },
  signUpContainer: {
    alignItems: "center",
    marginTop: "auto",
  },
  signUpText: {
    fontSize: 16,
    color: "#666",
  },
  signUpLink: {
    color: "#007AFF",
    fontWeight: "600",
    textDecorationLine: "underline",
  },
});
